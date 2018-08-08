<?php

namespace App\Http\Controllers;
use App\Model\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('post.allPost',compact('posts'));
    }
}
