<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $token = Auth::user()->createToken('authToken')->plainTextToken;
        return response()->json(['token' => $token], 200);
    } else {
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}

}
