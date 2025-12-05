<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(request $request) {
        $incomingData = $request->validate([
            "email" => ["required", "string"],
            "name" => ["required", "string", "max:255"],  
            "password" =>["required", "string", "min:3"]
        ]);

        $incomingData["password"] = bcrypt($incomingData["password"]);
        $user = User::create($incomingData);
        return redirect("/");
    }

    public function logout(Request $request) {
        auth()->logout();

        return redirect ("/");
    }

    public function login(Request $request){
        $credentials = $request->validate([
            "loginname" => ["required", "string"],
            "loginpassword" => ["required", "string"]
        ]);

        if(auth()->attempt(["name"=>$credentials["loginname"], 
        "password"=>$credentials["loginpassword"]])) {
            $request->session()->regenerate();
            return redirect('/page1');
        }

        return redirect('/')->withErrors([
            "loginError" => "incorrect username and password"
        ]);
    }

}
