<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesertaController extends Controller
{
    public function form(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'max:255'],
            'nim' => ['required', 'max:255'],
            'fakultas' => ['required', 'max:100'],
            'angkatan' => ['required', 'max:45'],
            'alamat' => ['required', 'max:255'],
            'user_id' => ['required', 'max:255']
            // 'akun_ig' => ['required', 'max:255'],
            // 'link_gdrive' => ['required', 'max:255'],
            // 'user_id' => ['required', 'max:255']
        ]);

        $validated_pend = $request->validate([
            'akun_ig' => ['required', 'max:255'],
            'link_gdrive' => ['required', 'max:255'],
            'kontak' => ['required', 'max:255'],
            'event_id' => ['required'],
        ]);
        // dd($validated_pend);
        if ($validated_pend && $validated) {
            $peserta = Peserta::create($validated);
            $validated_pend['peserta_id'] = $peserta->id;

            Pendaftaran::create($validated_pend);
            return redirect('/home')->with('pesan', 'registrasi berhasil!');
        } else {
            return redirect('/regis-lfls')->with('daftar_gagal', 'Registrasi gagal! Cek kembali form anda');
        }
    }
}
