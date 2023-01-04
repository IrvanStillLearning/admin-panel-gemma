<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('login.login');
    }

    public function authenticate(Request $request){
        $credentials = Validator::make($request->all(), [
            'email' => 'required|email:dns',
            'password' => 'required',
        ], 
        [
            'email.required' => 'Email Belum Diisi',
            'email.email' => 'Masukkan Email yang Valid',
            'password.required' => 'Password Belum Diisi',
        ]);

        if ($credentials->fails()) {
             return [
                'status' => 300,
                'message' => $credentials->errors()->first()
             ];
        }

        if (Auth::attempt([
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ])) {
            $request->session()->regenerate();
 
            return [
                'status' => 201,
                'message' => "Login Berhasil"
            ];
        } else {
            return [
                'status' => 300,
                'message' => 'Email / Password yang anda masukkan salah'
            ];
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
