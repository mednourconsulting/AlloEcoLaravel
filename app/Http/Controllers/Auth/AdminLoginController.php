<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
       return view('auth.admin-login');
    }

    public function login(Request $request)
    {
       //validate data
       $this->validate($request, [
         'username' => 'required|string',
         'password' => 'required|string|min:6'
       ]);
       //Attemp to log the user in
       if (Auth::guard('admin')->attempt(['username'=>$request->username, 'password'=>$request->password], $request->remember)) {
         //if successful , then redirect to their intended location
         return redirect()->intended('admin');
       }
       //if unsuccessful then redirect back to the log in with the form data
       return redirect()->back()->withInput($request->only('username','rememeber'));
    }
}
