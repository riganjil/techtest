<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function authenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if ($email == "salt@gmail.com" && $password == "salt"){
            session()->push("user", "Salt Indonesia");
            return redirect("/");
        }else{
            return redirect()->back()->with(["error" => "Invalid email or password"]);
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('login');
    }
}
