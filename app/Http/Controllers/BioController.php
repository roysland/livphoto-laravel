<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioController extends Controller
{
    public function index()
    {
        $session = session()->get('admin');
        return view('bio', ['session' => $session]);
    }
}
