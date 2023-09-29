<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function login(Request $request)
    {
        \Log::info($request->all());
        $credentials = $request->only('email', 'password');
        if ($credentials['email'] == 'liv.jansen@gmail.com' && $credentials['password'] == '1234') {
            $request->session()->put('admin', 'yes');

        }
        return redirect()->route('index');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin');
        return redirect()->route('index');
    }
}
