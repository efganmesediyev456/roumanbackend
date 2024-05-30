<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {

        return view("backend.login");

    }

    public function loginPost(Request $request)
    {
        if(Auth::attempt($request->only(["email","password"]))){
            return redirect()->route("admin.dashboard");
        }
        return redirect()->back()->withMessage('Password or Email incorrect');
    }

}
