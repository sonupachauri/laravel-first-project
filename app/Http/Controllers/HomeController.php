<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
          $categories=Category::get();
        //$posts=Post::orderby('id','desc')->get();
            $posts=Post::when(request('category_id'),function($query){
                $query->where('category_id',request('category_id'));
            }) 
                ->latest()
                ->get();
        // dd($posts);
        return view('index',compact('categories','posts'));
    }
}
