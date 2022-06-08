<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
        if(auth()->attempt(['email'=>$request->email,'password'=>$request->password]) == false){
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }

        return redirect('home');
    }

    public function destroy(){
        auth()->logout();
        return redirect('home');
    }
}
