<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('login.register');
    }

    public function store(Request $request){
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:5|max:255',
            'passwordConfirm' => 'required|min:5|max:255|same:password'
        ]);

        $request['password'] = Hash::make($request['password']);
        $request->request->remove('passwordConfirm');
        User::create($request->all());   

        $request->session()->flash("success", "Registration Successfull..! Please Login");
        return redirect("/login");
    }
}
