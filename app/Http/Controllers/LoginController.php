<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }

    public function loginUser(Request $request){

        $remember_me = $request->has('remember_me') ? true : false;

        $credentials = $request->only('staff_id', 'password');

        if (Auth::attempt($credentials, $remember_me)) {
           
            return redirect()->route('dashboard');

        }
        
        session()->flash('invalid_credentials', 'Invalid Staff ID or Password');
        return redirect()->back();
    }

    public function registerForm(){
        return view('auth.register');
    }

    public function registerUser(Request $request){

        $validator = Validator::make($request->all(), [
            'staff_id' => ['required','unique:users', 'string'],
            'email'    => ['required', 'string', 'email', 'unique:users', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6'],
            'role' => ['required'],
        ]);

       if($validator->fails()){
            
            return redirect()
                        ->back()
                        ->withErrors($validator);
       }

        $user = User::create([
            'staff_id' => $request['staff_id'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role']
        ]);
        return redirect()->route('login');

    }

    public function logout(Request $request){
        
        Auth::logout();
        return redirect()->route('login');
    }

}
