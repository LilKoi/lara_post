<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('home' ,
            ['posts' => $posts]);
    }
    
    public function post(Request $Request){
            Post::create([
                'name'        =>  $Request['name'],
                'description' =>  $Request['description'],
                'img'         =>  '1',
                'author'      =>  '1',
                'category'    =>  '1'
            ]);
            return redirect()-> route( 'profile');
    }

    public function all_post(){

    }
}
