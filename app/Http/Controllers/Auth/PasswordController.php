<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{

    public function edit(Request $request)
    {
        return view('profile.change-password', [
            'user' => $request->user()
        ]);
    }

    /**
     * Update the user's password.
     */
    public function update(ChangePasswordRequest $request): RedirectResponse
    {
        try {
            $request->user()->update([
                'password' => Hash::make($request->password),
            ]);

            return back()->with('success', 'Successfully changed');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
