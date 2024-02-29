<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //Logout
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    //Show Login Form

    public function login(){
        return view('users.login');
    }

    //Authenticate User
    public function authenticate(Request $request){
        $form = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
            ]);
        if(auth()->attempt($form)){
            $request->session()->regenerate();

            return redirect('/');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function create(){
        return view('users.register');
    }
    
    public function store(Request $request){
        $form = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']
            ]);

        $form['password'] = bcrypt($form['password']);

        $user = User::create($form);

        auth()->login($user);

        return redirect('/');
    }
}

