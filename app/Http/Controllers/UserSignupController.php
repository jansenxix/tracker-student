<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\PasswordMail;
use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\userSignup;
use App\Models\Studentlist;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserSignupController extends Controller
{
    public function store(Request $request)
    {
        // Retrieve the user by the fullname
        $user = studentlist::where('fname', $request['fname'])->where('lname', $request['lname'])->first();
        // Verify the password
        if ($user) {
            $admin = admin::where("student_id", $user->id)->first();

            if($admin) {
                return response()->json([
                    'status'=>200,
                    'message'=>'User Already Registered',
                ]);
            }

            return response()->json([
                'status'=>200,
                'message'=>'Success',
                'user' => $user
                ]);
        }

        return response()->json([
            'status'=>200,
            'message'=>'Credential not exist!',
            ]);
    }
}
