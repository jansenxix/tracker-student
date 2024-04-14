<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Signup;

class SchoolController extends Controller
{
    public function signup(Request $request)
    {
        $signup = new Signup;
        $signup->username = $request->username;
        $signup->password = $request->password;
       

        $signup->save();
        return view('signup');
    }
}