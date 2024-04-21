<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Services\NotificationServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function comment(Request $request)
    {
        $user = Auth::user();
        $post = new Comment();
        $post->post_id = $request->id;
        $post->description = $request->description;
        $post->admin_id = $user->id;
        $post->student_id = 0;

        $post->save();
        $description = "New Comment from ". $user->fName;
        NotificationServices::notification($request->id, $description);

        return "Success";
    }
}
