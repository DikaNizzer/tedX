<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.regis');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // 'name' => ['required', 'max:45'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'max:45'],
            'password_confirmation' => ['required', 'same:password']
            
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);
        // var_dump($user);
        // exit();

        if(!is_null($user)) {
            // Kalai Berhasil
            return redirect('/login')->with('alert', 'registrasi berhasil. silahkan login!');
        }else {
            // Masih Belum jalan
            return redirect('/regis')->with('alertfail', 'registrasi gagal!');
        }

        //sementara untuk mengetahui apakah regis berhasil atau tidak
        // return redirect('/login')->with('alert', 'registrasi berhasil. silahkan login!');
    }
}
