<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class TestController extends Controller
{
       public function index() {
       
        return view('index');
    }
    public function pegawai(){

    	return View::make('test2');

    }

    public function info(){
        return view('info');
    }
}
