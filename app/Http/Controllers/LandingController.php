<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function homepage(){
        return view('pages.homepage');
    }
    public function newHomePage(){
        return view('pages.homepage-new');
    }
}
