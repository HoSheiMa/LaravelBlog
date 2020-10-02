<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminSettingsController extends Controller
{
    public function profile() {
        $meta_title = "Admin Profile";
        return view('admin.account.profile', compact('meta_title'));
    }

    public function profileUpdate(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::findOrFail(Auth::id());

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('successMsg', 'Profile has been updated successfully!');
    }

    public function password() {
        $meta_title = "Admin Password";
        return view('admin.account.password', compact('meta_title'));
    }
    
    public function passwordUpdate(Request $request) {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6',

        ]);

        $hashedPassword = Auth::user()->password;

        if(Hash::check($request->old_password, $hashedPassword)) {
            if(!Hash::check($request->password, $hashedPassword)) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->back();
            } else {
                return redirect()->back()->with('loginerrorMsg', 'The new password cannot be the same as the old password!');
            }
        } else {
            return redirect()->back()->with('loginerrorMsg', 'Current password is incorrect!');
        }



    }

}