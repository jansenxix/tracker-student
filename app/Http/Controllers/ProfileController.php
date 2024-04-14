<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profile;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function getUserLogin(Request $request)
    {
        return Auth::user();
    }
}