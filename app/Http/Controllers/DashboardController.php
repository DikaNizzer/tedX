<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'jml_pendaftar_subevent' => Pendaftaran::where('event_id', 2)->count()
        ]);
    }
}
