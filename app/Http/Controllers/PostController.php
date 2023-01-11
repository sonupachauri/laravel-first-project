<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function show($postId){

        $post = Post::find($postId);

        //dd($post);

        return view('post',compact('post'));
    }
}
