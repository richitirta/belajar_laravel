<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
    	$nama="Richi Tirta Harry S";
    	$matkul=["Pemrograman C","Kalkulus","PKN"];
    	return view('biodata',['nama'=>$nama],['matkul'=>$matkul]);
    	
    }
}
