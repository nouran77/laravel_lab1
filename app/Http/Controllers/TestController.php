<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller

{

    public function __construct(){

        $this->middleware('TestMiddleware');
}


    public function about(){

        return view('about');
    }

    public function contact(){

        return view('contact');

    }
}
