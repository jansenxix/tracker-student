<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\PasswordMail;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\signup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SignupController extends Controller
{

    public function store(Request $request)
    {
        $user = admin::where('Uname', $request['Uname'])->first();

        if ($user && $user->pass == $request['pass']) {
            Auth::login($user);
            return response()->json([
                "message" => "Success",
                "user" => $user
            ]);
        }

        return response()->json([
            "message" => "Incorrect Credential",
        ]);
    }
}
