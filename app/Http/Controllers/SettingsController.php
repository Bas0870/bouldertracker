<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings', ['user' => Auth::user()]);
    }

    public function update(UpdateSettings $request)
    {
        $user = $request->user();
        $messages = [];

        if ( $newPassword = $request->input('new_password') ) {
            $user->password = Hash::make($newPassword);
            $messages[] = __('Password Updated!');
        }

        if ( $user->email !== $request->input('email') ) {
            $user->email = $request->input('email');
            $messages[] = __('E-Mail Address updated!');
        }

        $user->save();

        return redirect('settings')->with('status', $messages);
    }
}
