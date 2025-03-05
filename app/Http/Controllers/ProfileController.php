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
     * Displays the profile edit page for the authenticated user.
     *
     * This method retrieves the currently authenticated user and passes it to the profile edit view.
     *
     * @param Request $request The HTTP request containing the authenticated user data.
     * @return \Illuminate\View\View Returns the profile edit view with user details.
     */

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Updates the authenticated user's profile information.
     *
     * This method validates the request data, updates the user's profile details, and resets
     * email verification if the email is changed. After saving the changes, the user is redirected
     * back to the profile edit page with a success message.
     *
     * @param ProfileUpdateRequest $request The validated request containing updated profile data.
     * @return \Illuminate\Http\RedirectResponse Redirects back to the profile edit page with a status message.
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
     * Deletes the authenticated user's account.
     *
     * This method validates the user's password, logs the user out, deletes their account,
     * invalidates the session, regenerates the session token, and redirects to the homepage.
     *
     * @param Request $request The HTTP request containing the user's password for validation.
     * @return \Illuminate\Http\RedirectResponse Redirects to the homepage after account deletion.
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

    /**
     * Displays the force password update form for users required to reset their password.
     *
     * This method checks if a valid user exists for the provided password reset token.
     * If the token is invalid or expired, the user is redirected to the login page with an error message.
     * Otherwise, the password update form is displayed.
     *
     * @param string $token The unique token for forced password reset.
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse Returns the password update view
     *         or redirects to the login page if the token is invalid.
     */

    public function showForceUpdateForm($token)
    {
        $user = User::where('force_password_reset_token', $token)->first();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Invalid or expired token.');
        }
        return view('auth.force-update-password', ['token' => $token, 'email' => $user->email]);
    }
    /**
     * Handles forced password updates for users with a valid reset token.
     *
     * This method validates the request, verifies the reset token, updates the user's password,
     * clears the token, and saves the changes. If successful, the user is redirected to the login page
     * with a success message. If the token is invalid or expired, the user is redirected with an error.
     *
     * @param Request $request The HTTP request containing the new password and reset token.
     * @return \Illuminate\Http\RedirectResponse Redirects to the login page with a success or error message.
     */

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
        return redirect()->route('login')->with('success', 'Password updated successfully. Check you email box to get your provisory password.');
    }
}
