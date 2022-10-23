<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('peserta.form',[
            "title" => "TEDx Universitas Airlangga"
        ]);
    }

}
