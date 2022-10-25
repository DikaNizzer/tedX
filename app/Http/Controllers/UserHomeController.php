<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('peserta.home',[
            "title" => "TEDx Universitas Airlangga"
        ]);
    }

    public function form()
    {
        $user = User::find(Auth::user()->id);

        return view('peserta.form',[
            'title' => 'TEDx Universitas Airlangga',
            'user' => $user
        ]);
    }

    public function status()
    {
        return view('peserta.status',[
            "title" => "TEDx Universitas Airlangga"
        ]);
    }

}
