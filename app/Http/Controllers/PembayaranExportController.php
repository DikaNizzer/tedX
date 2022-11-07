<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PembayaranExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class PembayaranExportController extends Controller
{
    public function pembayaranExport() 
    {
        return Excel::download(new PembayaranExport, 'pembayaran.xlsx');
    }
}
