<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class SubeventController extends Controller
{
    public function index()
    {
        // $pendaftaran = DB::table('pendaftarans')->get();
        $pendaftaran = Pendaftaran::all();
        return view('admin.sub_event', ['pendaftaran' => $pendaftaran]);
    }
}
