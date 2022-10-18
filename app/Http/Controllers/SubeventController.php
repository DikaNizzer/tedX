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
        $pendaftarans = Pendaftaran::all();
        return view('admin.sub_event', compact('pendaftarans'));
    }
}
