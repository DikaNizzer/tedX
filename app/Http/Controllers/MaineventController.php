<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class MaineventController extends Controller
{
    public function index()
    {
        $pendaftarans = Pendaftaran::where('event_id','=','1')->get();
        return view('admin.main_event', compact('pendaftarans'));
    }
}
