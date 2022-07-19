<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function welcome(){
    	return view('layout');
    }
    public function index(){
    	return view('trangchu');
    }
    public function designed_by(){
    	return view('designedby');
    }
}
