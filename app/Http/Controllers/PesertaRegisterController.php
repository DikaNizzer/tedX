<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PesertaRegisterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            // 'name' => ['required', 'max:45'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'max:45'],
            'password_confirmation' => ['required', 'same:password']
            
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        return redirect('/')->with('alert', 'registrasi berhasil. silahkan login!');

    }
}
