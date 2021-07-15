<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //20210618
    public function index(){
        return view('index');
    }
}
