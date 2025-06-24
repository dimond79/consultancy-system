<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        // dd($request->all());

        try{
            $data = $request->validate([
                'email'=> 'required|email',
                'password' => 'required|min:5'
            ]);

            if(Auth::attempt($data)){
                $request->session()->regenerate();
                return redirect()->intended('/admin')->with('success','Login Successfully.');
            }

            return back()->withErrors([
                'email' => 'The Provided Credentials do not match the records.',
            ])->onlyInput('email');
        }
        catch(\Exception $e){
            return redirect()->back()->with('error','Something went wrong.'.$e->getMessage());
        }


    }
}
