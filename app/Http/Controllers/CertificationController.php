<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class CertificationController
 *
 * This controller handles the generation of membership certification images.
 *
 * @package App\Http\Controllers
 */
class CertificationController extends Controller
{
    /**
     * Generate a membership certificate image with user details.
     *
     * This method retrieves authenticated user details, overlays them on a certificate template,
     * and generates an image with proper fonts, positioning, and colors.
     *
     * @return Response
     */
    public function generateImage(): Response
    {
        // Define font paths
        $fontBasicPath = public_path('assets/fonts/arial.ttf'); // Arial for general text
        $fontFancyPath = public_path('assets/fonts/AlexBrush-Regular.ttf'); // AlexBrush for the name

        // Retrieve authenticated user
        $user = Auth::user();
        $member = Member::where('user_id', $user->id)->first();

        // Load the certificate template
        $imagePath = public_path('certificates/AETH_Membership.png');
        $img = Image::make($imagePath);

        // Font settings
        $fontSizeName = 96;
        $fontSizeDetails = 48;
        $fontColor = '#4a235a';

        // Construct member's full name
        $name = !empty($member->last_name) && !empty($member->first_name)
            ? $member->first_name . ' ' . $member->last_name
            : (!empty($user->name) ? $user->name : '');

        // Membership ID & Dates
        $membershipID = !empty($member) ? $member->id : '';
        $startDate = optional($member->membership_start_date)->format('M/d/Y') ?? '';
        $endDate = optional($member->membership_end_date)->format('M/d/Y') ?? '';
        $membershipInfo = trim("{$startDate} - {$endDate}");
        $membershipPlan = !empty($member) ? $member->membership_plan : '';

        // Calculate text positions
        $nameX = $img->width() / 2;
        $nameY = $img->height() * 0.3;
        $membershipIDY = $nameY + ($fontSizeName * 3.0);
        $membershipPlanY = $membershipIDY + ($fontSizeName * 1.2);
        $membershipX = $membershipIDY + ($fontSizeName * 3.5);
        $membershipY = $membershipIDY + ($fontSizeName * 2.7);

        // Overlay Member's Name (Fancy Font)
        $img->text($name, $nameX, $nameY, function ($font) use ($fontSizeName, $fontColor, $fontFancyPath) {
            $font->file($fontFancyPath);
            $font->size($fontSizeName);
            $font->color($fontColor);
            $font->align('center');
            $font->valign('center');
        });

        // Overlay Membership ID
        $img->text($membershipID, $nameX, $membershipIDY, function ($font) use ($fontSizeDetails, $fontColor, $fontBasicPath) {
            $font->file($fontBasicPath);
            $font->size($fontSizeDetails);
            $font->color($fontColor);
            $font->align('center');
            $font->valign('center');
        });

        // Overlay Membership Plan
        $img->text($membershipPlan, $nameX, $membershipPlanY, function ($font) use ($fontSizeDetails, $fontColor, $fontBasicPath) {
            $font->file($fontBasicPath);
            $font->size($fontSizeDetails);
            $font->color($fontColor);
            $font->align('center');
            $font->valign('center');
        });

        // Overlay Membership Dates
        $img->text($membershipInfo, $membershipX, $membershipY, function ($font) use ($fontSizeDetails, $fontBasicPath) {
            $font->file($fontBasicPath);
            $font->size($fontSizeDetails);
            $font->color('#000000');
            $font->align('center');
            $font->valign('center');
        });

        // Generate and return the image response
        return $img->response('png')->header('Content-Disposition', 'attachment; filename="membership_certificate.png"');
    }
}
