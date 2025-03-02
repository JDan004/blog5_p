<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create(){

    }

    public function store(){

    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){
        
    }
}
