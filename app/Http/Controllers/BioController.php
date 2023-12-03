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

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $request->session()->put('askedQuote', 'yes');
        $quote = new \App\Models\Quotes();
        $quote->email = $request->email;
        $quote->save();

        return redirect('/bio')->with('success', 'Quote request sent!');
    }
}
