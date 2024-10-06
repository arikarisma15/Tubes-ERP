<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        return view('listproduk'); 

    }
    public function create(){
        return view('addproduk'); 

    }
}
