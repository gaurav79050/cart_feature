<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
  public function index($user_role = 0) {

    return view('login',['user_role'=> $user_role]);
  }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {
            $user = User::where('email', $req->input('email'))->first();

            if ($user && Hash::check($req->input('password'), $user->password)) {
                // Set session
                $req->session()->put([
                    'userId' => $user->id,
                    'user_name' => $user->fname,
                    'user_role' => $req->input('user_role')
                ]);

                if($req->input('user_role') == 0) {
                    return redirect()-> route('user');
                }
                else {
                    return redirect()-> route('admin');
                }
            }

            Log::warning('Login failed for email: ' . $req->input('email'));
            return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
        } catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage());
            return redirect()->route('login')->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
