<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WmaController extends Controller
{
    public function index(){

        return view('wmaweb.en.index');
    }

}
