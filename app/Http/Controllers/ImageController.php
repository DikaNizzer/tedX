<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function index(Pembayaran $pembayaran)
    {
        $bukti_bayar = Pembayaran::find($pembayaran->id)->bukti_bayar;
        return view('admin.bukti_pembayaran', [
            'file_name' => $bukti_bayar
        ]);
    }
}
