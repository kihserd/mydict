<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhraseController extends Controller
{
    public function create()
    {
        return view('phrases.create');
    }
}
