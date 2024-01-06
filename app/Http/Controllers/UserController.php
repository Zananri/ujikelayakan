<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function staffCreate(){
        return view('staff.create');
    }

    
    public function guruCreate(){
        return view('guru.create');
    }

    // public function guru(){


    //     $guru = Guru::where('user_id', '=', 'user')->get();
    //     return view('guru.index', compact('guru'));

    // }

    
    public function staff(){
        return view('staff.index');
    }




    public function index()
    {
        return view('user.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'role' => 'required'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration Successfully! Please Login');

        return redirect('/login')->with('success', 'Registration Successfully! Please Login');
    }

}