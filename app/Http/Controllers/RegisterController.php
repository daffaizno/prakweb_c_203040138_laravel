<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:120',
            'username' => ['required', 'min:2','max:36','unique:users' ],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:120'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash->with('success', 'Registrationsuccessfull!');
        
        return redirect('/login')->with('success', 'Registration was successful!');
    }
}
