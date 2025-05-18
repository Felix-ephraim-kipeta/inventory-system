<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexRegister()
    {
        //
        return view('register');
    }

    public function indexLogin()
    {
        //
        return view('login');
    }


    /**
     * Show the form for creating a new resource.
     */

     public function register(Request $request)
    {
        //
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8'
        ]);

        $fullname = trim($validated ['firstname']) . ' ' . trim($validated ['lastname']);

        $user = User::create([
            'name' => $fullname,
            'email' => $validated['email'],
            'password' => $validated['password']
        ]);

        Auth::login($user);
        return redirect()->route('dashboard');
        
    } 

    public function login(Request $request)
    {
        //
        
    }

    public function logout(Request $request)
    {
        //
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('show.login');
        
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
