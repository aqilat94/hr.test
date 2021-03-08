<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthStaffController extends Controller
{
    public function showLogin()
        {
            return view('hrms.auth.loginstaff');
        }

        public function doLogin(Request $request)
        {
            $email    = $request->email;
            $password = $request->password;

            $user = User::where('email', $email)->first();
            if ($user) {

                if (\Auth::attempt(['email' => $email, 'password' => $password])) {
                    return redirect()->to('welcome');
                } else {
                    \Session::flash('class', 'alert-danger');
                    \Session::flash('message', 'User id or password does not match!');
                }
            } else {
                \Session::flash('class', 'alert-danger');
                \Session::flash('message', 'User id or password does not match!');
            }

            return redirect()->to('/');
        }
}
