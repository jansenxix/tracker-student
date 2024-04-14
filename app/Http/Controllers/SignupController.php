<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\signup;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    
    public function store(Request $request)
    {
        $user = admin::where('Uname', $request['Uname'])->first();

        if ($user && $user->pass == $request['pass']) {
            Auth::login($user);
            return "Success";
        }

        return "Failed";
    }
}
