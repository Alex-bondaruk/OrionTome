<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show($post_id)
    {
        $post = Post::find($post_id);
        return view('post', compact('post')); 
    }
}
