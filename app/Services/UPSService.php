<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class UPSService
{
    protected $client;
    protected $baseUrl;
    protected $clientId;
    protected $clientSecret;
    protected $redirectUri;
    protected $accessToken;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseUrl = env('UPS_BASE_URL'); 
        $this->clientId = env('UPS_CLIENT_ID');
        $this->clientSecret = env('UPS_CLIENT_SECRET');
        $this->redirectUri = env('UPS_REDIRECT_URI');
    }

    /**
     * Step 1: Redirect user to UPS to login and authorize
     */
    public function getAuthorizationUrl()
    {
        $query = http_build_query([
            'client_id' => $this->clientId,
            'redirect_uri' => $this->redirectUri,
            'response_type' => 'code',
            'scope' => 'rate',
        ]);

        return $this->baseUrl . '/security/v1/authorize?' . $query;
    }

    /**
     * Step 2: Exchange the authorization code for an access token
     */
    public function exchangeCodeForToken($authorizationCode)
    {
        $url = rtrim($this->baseUrl, '/') . '/security/v1/oauth/token';

        try {
            $response = $this->client->post($url, [
                'headers' => ['Content-Type' => 'application/x-www-form-urlencoded'],
                'form_params' => [
                    'grant_type' => 'authorization_code',
                    'client_id' => $this->clientId,
                    'client_secret' => $this->clientSecret,
                    'redirect_uri' => $this->redirectUri,
                    'code' => $authorizationCode,
                ],
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            
            if (!isset($data['access_token'])) {
                throw new \Exception('UPS did not return an access token');
            }

            $this->accessToken = $data['access_token'];

            // Store token and expiration
            $expiration = time() + $data['expires_in'] - 60; // Subtract 60 seconds for buffer
            cache()->put('ups_access_token', $this->accessToken, now()->addMinutes(60));
            cache()->put('ups_token_expiration', $expiration, now()->addMinutes(60));

            return $this->accessToken;
        } catch (RequestException $e) {
            \Log::error('UPS Token Exchange Failed: ' . $e->getMessage());
            throw new \Exception('UPS Token Exchange Failed: ' . $e->getMessage());
        }
    }

    /**
     * Step 3: Get shipping rates from UPS using access token
     */
    public function getRates($shipmentDetails)
    {
        // Retrieve token from cache if available
        if (cache()->has('ups_access_token')) {
            $this->accessToken = cache()->get('ups_access_token');
        }

        $url = rtrim($this->baseUrl, '/') . '/ship/v1807/rating/Rate';

        try {
            $response = $this->client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->accessToken,
                    'Content-Type' => 'application/json',
                ],
                'json' => $shipmentDetails
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            \Log::error('UPS Rate Request Failed: ' . $e->getMessage());
            throw new \Exception('UPS Rate Request Failed: ' . $e->getMessage());
        }
    }
}
