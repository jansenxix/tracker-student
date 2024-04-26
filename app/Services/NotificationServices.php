<?php

namespace App\Services;

use App\Models\Notification;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class NotificationServices
{
    public static function notification($post_id, $description)
    {
        $users = [];

        $post = Post::with("comments")->find($post_id);

        $users[] = $post->admin_id;

        foreach ($post->comments as $comment)
        {
            $users[] = $comment->admin_id;
        }


        Log::info($users);

        $users = array_unique($users);

        Log::info(json_encode($users));

        foreach ($users as $user)
        {
            $notification = new Notification();

            $notification->admin_id = $user;
            $notification->post_id = $post_id;
            $notification->description = $description;


            if($user != Auth::user()->id)
                $notification->save();
        }
    }
}
