<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
use Illuminate\Http\Request;

class CertificationController extends Controller
{

    public function generateImage()
    {
        $fontBasicPath = public_path('assets/fonts/arial.ttf'); // Arial for general text
        $fontFancyPath = public_path('assets/fonts/AlexBrush-Regular.ttf'); // AlexBrush for the name

        $user = Auth::user();
        $member = Member::where('user_id', $user->id)->first();

        // Load the certificate template
        $imagePath = public_path('certificates/AETH_Membership.png');
        $img = Image::make($imagePath);

        // Font settings
        $fontSizeName = 96;
        $fontSizeDetails = 48;
        $fontColor = '#4a235a';

        // Member's full name (fancy font)
        $name = !empty($member->last_name) && !empty($member->first_name) ?
            $member->first_name . ' ' . $member->last_name : (!empty($user->name) ? $user->name : '');

        // Membership ID & Dates
        $membershipID = !empty($member) ? $member->id : '';
        $startDate = optional($member->membership_start_date)->format('M/d/Y') ?? '';
        $endDate = optional($member->membership_end_date)->format('M/d/Y') ?? '';
        $membershipInfo = trim("{$startDate} - {$endDate}");
        $membershipPlan = !empty($member) ? $member->membership_plan : '';

        // Member Name Position (Using AlexBrush)
        $nameX = $img->width() / 2;
        $nameY = $img->height() * 0.3;
        $img->text($name, $nameX, $nameY, function ($font) use ($fontSizeName, $fontColor, $fontFancyPath) {
            $font->file($fontFancyPath); // Fancy font for the name
            $font->size($fontSizeName);
            $font->color($fontColor);
            $font->align('center');
            $font->valign('center');
        });

        // Member ID Position
        $membershipIDY = $nameY + ($fontSizeName * 3.0);
        $img->text($membershipID, $nameX, $membershipIDY, function ($font) use ($fontSizeDetails, $fontColor, $fontBasicPath) {
            $font->file($fontBasicPath); // Arial for details
            $font->size($fontSizeDetails);
            $font->color($fontColor);
            $font->align('center');
            $font->valign('center');
        });

        // Membership Plan Position
        $membershipPlanY = $membershipIDY + ($fontSizeName * 1.2);
        $img->text($membershipPlan, $nameX, $membershipPlanY, function ($font) use ($fontSizeDetails, $fontColor, $fontBasicPath) {
            $font->file($fontBasicPath); // Arial for details
            $font->size($fontSizeDetails);
            $font->color($fontColor);
            $font->align('center');
            $font->valign('center');
        });

        // Membership Dates Position
        $membershipx = $membershipIDY + ($fontSizeName * 3.5);
        $membershipY = $membershipIDY + ($fontSizeName * 2.7);
        $img->text($membershipInfo, $membershipx, $membershipY, function ($font) use ($fontSizeDetails, $fontColor, $fontBasicPath) {
            $font->file($fontBasicPath); // Arial for details
            $font->size($fontSizeDetails);
            $font->color('#000000');
            $font->align('center');
            $font->valign('center');
        });

        return $img->response('png')->header('Content-Disposition', 'attachment; filename="membership_image.png"');
    }

}
