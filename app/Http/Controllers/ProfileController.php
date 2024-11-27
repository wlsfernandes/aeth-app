<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    // Show the forced password update form
    public function showForceUpdateForm($token)
    {
        $user = User::where('force_password_reset_token', $token)->first();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Invalid or expired token.');
        }
        return view('auth.force-update-password', ['token' => $token, 'email' =>$user->email]);
    }

    public function forceUpdatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
            'token' => 'required',
        ]);
        $user = User::where('force_password_reset_token', $request->token)->first();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Invalid or expired token.');
        }
        $user->password = Hash::make($request->password);
        $user->force_password_reset_token = null; // clear token
        $user->save();
        return redirect()->route('login')->with('success', 'Password updated successfully. You can now log in.');
    }
}
