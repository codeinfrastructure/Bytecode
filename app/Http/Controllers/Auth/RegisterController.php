<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User; // <-- TOEGEVOEGD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <-- TOEGEVOEGD

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $userData = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed'], 
        ]);

        $user = User::create($userData);

        Auth::login($user);
        
        return redirect()->route('dashboard');
    }
}
