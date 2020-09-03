<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getPageOne(){
        return view('pageone');
    }
    public function getPageTwo(){
        return view('pagetwo');
    }
    public function login(){
        return view('pagethree');
    }
}
