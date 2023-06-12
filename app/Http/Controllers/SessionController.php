<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class SessionController extends Controller
{
    function index() {
        return view('session.index',[
            "title" => "Session",
        ]);
    }

    function login(Request $request) {
        Session::flash('name', $request->name);
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ],[
            'name.required' => 'Username Wajib DIisi',
            'password.required' => 'Password Wajib DIisi',
        ]);

        $infologin = [
            'name' => $request->name,
            'password' => $request->password,
        ];
        
        if (Auth::attempt($infologin)) {
            // return 'success';
            return redirect('dashboard')->with('success1', 'Login Success');
        }
        else {
            // return 'error';
            return redirect('session')->with('Error1', 'Salah Password / Username');
        }
    }
    
    function logout() {
        Auth::logout();

        return redirect('session')->with('success', 'Logout Success');
    }

    function register() {
        return view('session/register');
    }

    function create(Request $request) {
        Session::flash('email', $request->email);
        Session::flash('name', $request->name);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
        ],
        [
            'name.required' => 'Username Wajib DIisi',
            'email.required' => 'Email',
            'email.unique' => 'Email',
            'password.required' => 'Password Wajib DIisi',
            'password.min' => 'Password Min 6 Angka',
        ]);

        $infologin = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];

        $data = [
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ];

        User::create($data);
        
        if (Auth::attempt($infologin)) {
            // return 'success';
            return redirect('dashboard')->with('success1', Auth::user()->name . 'Login Success');
        }
        else {
            // return 'error';
            return redirect('session/login')->with('Error1', 'Salah Password / Username');
        }
    }
}
