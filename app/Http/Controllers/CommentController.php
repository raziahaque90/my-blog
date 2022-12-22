<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $req,$id)
    {
        $comment = new Comment();
        $comment->post_id = $id;
        $comment->comment_desc = $req->comment_box;

        $comment->save();
        return redirect()->back();
    }
}
