<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // prevent session fixation
            return redirect()->intended('/products')->with('success', 'Welcome back!');
        }

        // If failed
        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->withInput();
    }

    public function showRegister()
    {
        return view('auth.register');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
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
        $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|unique:users',
            'number' => 'required|numeric',
            'email' => 'required|string|unique:users',
            'password' => 'required|confirmed|min:6',
            'gender' => 'required',
        ]);

        User::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'number' => $request->number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
        ]);

        return redirect()->back()->with('success', 'Registration successful!');
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
