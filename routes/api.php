<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Services\UPSService;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/ups/rate', function (Request $request) {
    try {
        $shipmentDetails = $request->all();

        $upsService = new UPSService();
        $rates = $upsService->getRates($shipmentDetails);

        return response()->json([
            'status' => 'success',
            'data' => $rates
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage()
        ], 500);
    }
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
