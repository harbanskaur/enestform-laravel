<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Login;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    //Signup Function
    public function signup(Request $request)
    {
        $request->validate([
            'fullname' => 'required', 
            'email' => 'required|email|unique:signup', 
            'password' => 'required|min:5', 
        ]);

        $register = new Login;
        if($request->isMethod('post')) {
            $register->fullname = $request->get('fullname');
            $register->email = $request->get('email');
            $register->password = Hash::make($request->get('password'));
            $register->save();
        }
        return redirect('/login')->with('success',
                                'Great! You have Successfully signup . Login Now');

    }

    //Login Function
    public function login_post(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'password' => 'required|min:5',
        ]);
        $credentials = $request->only('fullname', 'password');

        if (Auth::guard('signup')->attempt($credentials)) {
            return redirect()->intended('/')
                             ->with('success', 'You have Successfully loggedin');
        }
        return redirect("login")->with('error', 
                                'Oppes! You have entered invalid credentials');

    }

    //Logout Function
    public function logout() 
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');

    }
}
