<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        return view('post');
    }
    
    public function post(Request $Request){
            Post::create([
                'name'        =>  $Request ['name'],
                'description' =>  $Request ['description'],
                'img'         =>  false,
                'author'      =>  false,
                 'category'    =>  false
            ]);
            return redirect()-> route( 'profile');
    }
}
