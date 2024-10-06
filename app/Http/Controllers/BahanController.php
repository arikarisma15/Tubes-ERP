<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BahanController extends Controller
{
    public function index(){
        return view('listbahan'); 

    }

    public function create(){
        return view('addbahan'); 

    }
}
