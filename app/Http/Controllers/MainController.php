<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainControll extends Controller
{
    public function index(){
        return view('index0082');
    }
    public function databuku(){
        return view('databuku0082');
    }
    public function rakbuku(){
        return view('rakbuku0082');
    }    
    public function user(){
        return view('user0082');
    }    
}