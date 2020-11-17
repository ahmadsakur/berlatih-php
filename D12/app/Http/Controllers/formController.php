<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function signup()
    {
        return view('form');
    }

    public function welcome(Request $request)
    {
        $first = $request->namadepan;
        return view('landing', compact('first'));
    }
}
