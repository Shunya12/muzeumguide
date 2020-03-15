<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuzeumguideController extends Controller
{
    public function index(Request $request)
    {
        return view('muzeumguide.index');
    }
}
