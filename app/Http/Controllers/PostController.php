<?php

namespace App\Http\Controllers;


use App\Post;

class PostController extends Controller
{
    public function index(){
        return view('post');
    }
    
    public function post($data){
            Post::create([
                'name'        =>  $data['name'],
                'description' =>  $data['description'],
                'img'         =>  false,
                'author'      =>  false,
                 'category'    =>  false
            ]);
            return redirect()-> route( 'profile');
    }
}
