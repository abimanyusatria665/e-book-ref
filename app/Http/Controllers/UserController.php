<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Login;

class UserController extends Controller
{
    public function login(){
        return view('user.login');
    }
    public function register(){
        return view('user.register');
    }

    public function auth(Request $request)
    {
        $request->validate([

        'email' => 'required|exists:users,email',
        'password' => 'required'
        ],[
        'email.exists'=>"This user doesn't exists"
        ]);


    $user = $request->only('email', 'password');
    if(Auth::attempt($user)){
        return redirect('/');
    }else{
        return redirect('/login')->with('fail', "Fail To Login");
    }
    }

    public function inputRegister(Request $request){
        $request->validate([
        'email' => 'required',
        'name' => 'required',
        'password' => 'required'
    ]);    
    User::create([
        'name' => $request->name,
        'email'=> $request->email,
        'password' => Hash::make($request->password),
        'role' => "user",
        'download' => 0
    ]);
    return redirect('/login')->with('success', 'successfully creating account');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function userData(){
        $userData = User::all();
        return view('dashboard.user', compact('userData'));
    }
}

