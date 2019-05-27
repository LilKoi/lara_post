<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resources\views;

class PostController extends Controller
{
    public function index(){
        return view('post');
    }
}
