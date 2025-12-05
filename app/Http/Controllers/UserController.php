<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(request $request) {
        $incomingData = $request->validate([
            "email" => ["required", "string"],
            "name" => ["required", "string", "max:255"],  
            "password" =>["required", "string", "min:3"]
        ]);

        $incomingData["password"] = bcrypt($incomingData["password"]);
        print_r($incomingData);
        /*$user = User::create($incomingData);
        auth()->login($user);
        return redirect("/page1");*/
    }

    public function logout(request $request) {
        auth()->logout();

        return redirect ("/");
    }

    public function login(request $request){
        $credentials = $request->validate([
            "loginname" => ["requred", "string"],
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
