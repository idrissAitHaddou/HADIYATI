<?php

namespace App\controllers;

use App\https\HttpRequest;
use App\Models\Post;
use Controller;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();
        foreach($posts as $post)
        {
            echo $post['id']." : ".$post['name'].'<br>';
        }
    }
    public function show($id)
    {
        $post = Post::find($id);
        // $post = Post::where('name' , 'post1')->get();
    }
    public function create(HttpRequest $request)
    {

    }
}


