<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliderPost = Post::orderBy('id','desc')->take(3)->get();
        $first = Post::orderBy('id','desc')->first();
        $posts = Post::orderBy('id','desc')->take(6)->get();
        return view('frontend.home.index',compact('posts','sliderPost','first'));
    }
    public function showCategory()
    {
        
        $categories = Category::all();
        return view('frontend.category.index',compact('categories'));
    }
    public function showAllPost($id)
    {
        $category = Category::find($id);
        $posts = Post::where('cat_id', $id)->get();
        return view('frontend.post.index',compact('posts', 'category'));
    }
    public function postDetail($id)
    {
        $comments = Comment::where('post_id', $id)->get();
        $post = Post::find($id);
        return view('frontend.post.detail',compact('post','comments'));
    }
}
