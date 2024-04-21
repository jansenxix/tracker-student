<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\PasswordMail;
use Illuminate\Http\Request;
use App\Models\userSignup;
use App\Models\Studentlist;
use Illuminate\Support\Facades\Mail;

class UserSignupController extends Controller
{
    public function store(Request $request)
    {
        // Retrieve the user by the fullname
        $user = studentlist::where('fname', $request['fname'])->where('lname', $request['lname'])->first();
        // Verify the password
        if ($user) {

            return response()->json([
                'status'=>200,
                'message'=>'Success',
                'user' => $user
                ]);
        }

        return response()->json([
            'status'=>200,
            'message'=>'Failed',
            ]);
    }
}
