<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        $post = new Comment();
        $post->post_id = $request->id;
        $post->description = $request->description;
        $post->admin_id = Auth::user()->id;
        $post->student_id = 0;

        $post->save();

        return "Success";
    }
}
