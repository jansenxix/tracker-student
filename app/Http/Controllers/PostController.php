<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function post(Request $request)
    {

        $paths = [];
        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $image) {

                $fileName = $image->getClientOriginalName(); // Get the original file name
                $image->move('image', $fileName); // Move the file to a desired location, here 'uploads' directory

                $paths[] = $fileName;
            }
        }
        Post::create([
            "description" => $request->description,
            "admin_id" => Auth::user()->id,
            "images" => join('|', $paths),
            "post_type" => $request->post_type
        ]);
    }

    public function posts(Request $request)
    {
        $posts = Post::with("comments")->orderBy('created_at', 'desc')
            ->offset($request->count)->limit(3)->get();

        foreach ($posts as $post)
        {
            $admin = admin::find($post->admin_id);
            $post->admin = $admin;
            foreach ($post->comments as $comment)
            {
                $user = admin::find($comment->admin_id);
                $comment->admin = $user;
            }
        }

        return $posts;
    }

    public function getPost($id)
    {
        $post = Post::with("comments")->find($id);

        $admin = admin::find($post->admin_id);
        $post->admin = $admin;

        foreach ($post->comments as $comment)
        {
            $user = admin::find($comment->admin_id);
            $comment->admin = $user;
        }

        return response()->json(["post" => $post]);
    }

    public function delete(Request $request)
    {
        Post::find($request->id)->delete();

        return "Success";
    }
}
