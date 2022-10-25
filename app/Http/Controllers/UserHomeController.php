<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Peserta;
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
        $peserta = Peserta::where('user_id', Auth::user()->id)->get();

        return view('peserta.form',[
            'title' => 'TEDx Universitas Airlangga',
            'peserta' => $peserta
        ]);
    }

    public function status()
    {
        $peserta = Peserta::with('pendaftaran')->where('user_id', Auth::user()->id)->get();

        return view('peserta.status',[
            'title' => 'TEDx Universitas Airlangga',
            'peserta' => $peserta
        ]);
    }

}
