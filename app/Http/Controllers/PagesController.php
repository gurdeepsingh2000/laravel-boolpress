<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function publicSection(){
        return view('public');
    }

    public function privateSection(){
        return view('private');
    }
}
