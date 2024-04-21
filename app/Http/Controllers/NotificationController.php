<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\courselist;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NotificationController extends Controller
{
    public function getNotification($id) {
        $notification = Notification::with("posts")->where(["admin_id" => $id, "view" => 0])->get();
        Log::info($notification);

        return response()->json([
            "notification" => $notification,
            "count" => count($notification)
        ]);
    }
}
