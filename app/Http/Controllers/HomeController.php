<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resources\views;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
}
