<?php

namespace App\Controllers;
use App\Models\Post;

class PagesController extends Controller
{
	public function home()
	{

        $data=$this->app()->database->on(Post::class)->selectAll();

		// $data = [
		// 	'title' => 'PHP Mini Framework',
		// 	'description' => 'This is a mini PHP framework built from scratch!'
		// ];

		return $this->app()->view('home', $data);
	}

}
