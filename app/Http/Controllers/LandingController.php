<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\landing;

class LandingController extends Controller
{
    public function admin(Request $request)
    {
        return view('signup');
    }
}
