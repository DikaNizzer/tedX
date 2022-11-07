<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $jml_peserta_subevent = Pendaftaran::where('event_id', 2)->count();
        $jml_peserta_mainevent = Pendaftaran::where('event_id', 1)->count();
        return view('admin.dashboard', [
            'jml_peserta_subevent' => $jml_peserta_subevent,
            'jml_peserta_mainevent' => $jml_peserta_mainevent
        ]);
    }
}
