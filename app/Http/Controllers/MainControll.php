<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainControll extends Controller
{
   public function index(){
        return view('index0082');
    }
    public function databuku(){
        $item = DB::table('buku')
            ->select('*')
            ->get();
        return view('databuku0082',compact('item'));
    }
    public function rakbuku(){
        $item = DB::table('rak_buku as t')
            ->select('t.*', 'p.*','b.jenis as NamaBuku')
            ->leftjoin('buku as p', 'p.id', '=', 't.id_buku')
            ->leftjoin('jenis_buku as b', 'b.id', '=', 't.id_jenis_buku')
            ->get();
        return view('rakbuku0082',compact('item'));
    }   
    public function user(){
        $item = DB::table('user')
            ->select('*')
            ->get(); 
        return view('user0082',compact('item'));
    }  
}