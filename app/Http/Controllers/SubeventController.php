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
        $pendaftarans = Pendaftaran::where('event_id','=','2')->get();
        return view('admin.sub_event', compact('pendaftarans'));
    }
}
