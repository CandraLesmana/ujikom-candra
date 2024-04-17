<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = User::where('email', $request->email)->first();

            $token = auth()->user()->createToken('authToken')->plainTextToken;
            return response()->json(['message' => 'Login successful', 'token' => $token, 'user' => $user], 200);
        }

        return response()->json(['message' => 'Email Atau Passwaord Tidak Sesuai'], 401);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return response()->json(['message' => 'User created'], 201);
    }

    public function logout(Request $request)
    {
        return response()->json([
            $request->all()
        ]);

        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Logged out'], 200);
    }
}
