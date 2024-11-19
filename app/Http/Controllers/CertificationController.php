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
        $user = Auth::user();
        $member = Member::where('user_id', $user->id)->first();
        // Create a base image
        $imagePath = public_path('certificates/AETH_Membership.png');
        // Load the image
        $img = Image::make($imagePath);

        $fontSize = 70;
        $fontSize2 = 40;
        $fontColor = '#000000';
        $name = !empty($member->last_name) && !empty($member->first_name) ? $member->first_name . ' ' . $member->last_name : (!empty($user->name) ? $user->name : '');
        $membershipInfo = !empty($member) ? 'Member ID: ' . $member->id . 'Expiration Date: ' . $member->membership_end_date : 'Member ID 98765  Expiration Date: 18/11/2025'; 
        // Membership No. 13139 Valid from 11/14/2024 to 11/14/2025
        $img->text($name ?? '', $img->width() / 2, $img->height() / 2, function ($font) use ($fontSize, $fontColor) {
            $font->file(public_path('assets/fonts/arial.ttf'));
            $font->size($fontSize);
            $font->color($fontColor);
            $font->align('center');
            $font->valign('center');
        });

        // Calculate the position for the second line of text
        $lineHeight = $fontSize * 1.5;  // Adjust line height based on font size
        $yPositionForSecondLine = $img->height() / 2 + $lineHeight;  // Position it below the first line

        // Draw the second line of text (membership info)
        $img->text($membershipInfo, $img->width() / 2, $yPositionForSecondLine, function ($font) use ($fontSize2, $fontColor) {
            $font->file(public_path('assets/fonts/arial.ttf'));
            $font->size($fontSize2);
            $font->color($fontColor);
            $font->align('center');
            $font->valign('center');
        });



        return $img->response('png')->header('Content-Disposition', 'attachment; filename="membership_image.png"');
   
    }
}
