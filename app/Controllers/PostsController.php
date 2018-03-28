<?php

namespace App\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $query = $this->app()->database;

        $posts = $query->on(Post::class)->selectAll();
        // echo "<pre>";
        // var_dump($posts);
        return $this->app()->view('post/index', ['posts' => $posts]);
    }

    public function store()
    {
        return 'storing the user..';
    }

}