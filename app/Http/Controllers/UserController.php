<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        return view('user/dashboard');
    }

    public function profile(Request $request)
    {
        $userId = $request->session()->get('userId');
        $user = User::find($userId);
        return view('user/profile', ['user' => $user]);
    }
    

}
