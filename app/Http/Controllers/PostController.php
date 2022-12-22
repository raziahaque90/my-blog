<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('backend.post.index', compact('category'));
    }
    public function addPost(Request $req)
    {
        $post = new Post();
        $post->post_title = $req->post_title;
        $post->description = $req->description;
        $post->cat_id = $req->cat_id;
        $image = $req->post_image;
        if($image){
            $imageName = time() . $image->getClientOriginalName();
            $folder = 'post_image';
            $image->move($folder,$imageName);
            $post->image = $folder .'/'. $imageName;
        }
        $post->save();
        return redirect()->back();
    }
    public function showPost()
    {
        $posts = Post::all();
        return view('backend.post.all', compact('posts'));
    }
    public function editPost($id)
    {
        $category = Category::all();
        $post = Post::find($id);
        return view('backend.post.edit',compact('post', 'category'));
    }
    public function updatePost(Request $req, $id, $cId)
    {
        $post = Post::find($id);
        $post->post_title = $req->post_title;
        $post->description = $req->description;
        // $post->cat_id = $req->cat_id;
        if($req->cat_id == null){
            $post->cat_id = $cId;
        }
        else{
            $post->cat_id = $req->cat_id;
        }
        $image = $req->post_image;
        if($image){
            $imageName = time() . $image->getClientOriginalName();
            $folder = 'post_image';
            $image->move($folder,$imageName);
            $post->image = $folder .'/'. $imageName;
        }
        $post->save();
        return redirect()->route('post.show');

    }
    public function deletePost($id)
    {
        $post = Post::find($id);
        $image_path = $post->image;
        $post->delete();
        

 if (file_exists($image_path)) {

       @unlink($image_path);

   }
        return redirect()->back();
    }
}
