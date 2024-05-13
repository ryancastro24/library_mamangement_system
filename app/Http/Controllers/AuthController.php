<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    
    public function registerSave(Request $request){

      
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'idnumber' => 'required|unique:users',
            'password' => 'required|min:8',
        ]);


        
        // Create the user
       User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'idnumber' => $validatedData['idnumber'],
            'password' => Hash::make($validatedData['password']),
        ]);
        
       
            return redirect()->route('dashboard');
      
        
    }



    public function loginAction(Request $request){

        Validator::make($request->all(), [
            'idnumber' => 'required',
            'password' => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('idnumber', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'idnumber' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }


        
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();

        return redirect()->route('home');
    }


}
