<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf;
// use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Pembayaran;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use PDF;

class PesertaController extends Controller
{
    public function form(Request $request)
    {
        // dd($request);
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


    public function formMain(Request $request)
    {

        // dd($request);
        $validated = $request->validate([
            'nama' => ['required', 'max:255'],
            'nim' => ['required', 'max:255'],
            'fakultas' => ['required', 'max:100'],
            'angkatan' => ['required', 'max:45'],
            // 'alamat' => ['required', 'max:255'],
            'user_id' => ['required', 'max:255']
            // 'akun_ig' => ['required', 'max:255'],
            // 'link_gdrive' => ['required', 'max:255'],
            // 'user_id' => ['required', 'max:255']
        ]);

        $validated_pend = $request->validate([
            // 'akun_ig' => ['required', 'max:255'],
            // 'link_gdrive' => ['required', 'max:255'],
            'metode_bayar' => ['required'],
            'kontak' => ['required', 'max:255'],
            'event_id' => ['required'],
        ]);

        $validated_bayar = $request->validate([
            'institute' => ['required', 'max:255'],
            'age' => ['required'],

            'bukti_bayar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // dd($validated_pend);
        if ($validated_pend && $validated && $validated_bayar ) {
            $peserta = Peserta::create($validated);
            $validated_pend['peserta_id'] = $peserta->id;

            $pendaftaran = Pendaftaran::create($validated_pend);
            // AMbil id Pendaftaran
            $validated_bayar['pendaftaran_id'] = $pendaftaran->id;
            // AMBIL ID PESERTA
            $validated_bayar['pendaftaran_peserta_id'] = $peserta->id;
            // AMBIL NAMA BUKTI
            $validated_bayar['bukti_bayar'] = date('YmdHi').$request->file('bukti_bayar')->getClientOriginalName();
            $validated_bayar['status'] = 0;
            // STORE BUKTI
            // $path = $request->file('bukti_bayar')->store('public/bukti_bayar');
            $file= $request->file('bukti_bayar');
            $file-> move(public_path('bukti_bayar'), $validated_bayar['bukti_bayar']);

            Pembayaran::create($validated_bayar);
            // dd($validated_bayar['bukti_bayar']);

            return redirect('/status')->with('pesan', 'registrasi berhasil!');
        } else {
            return redirect('/regis-main')->with('daftar_gagal', 'Registrasi gagal! Cek kembali form anda');
        }
    }

    public function cetak_tiket($id, $nama)
    {

        $data = [
			'id' => $id,
            'nama' => $nama
		];

        // dd($data);
    	$pdf = PDF::loadView('peserta.tiket', $data)->setPaper('a4', 'potrait');
    	return $pdf->download('tiket.pdf');

        
        // $pdf = PDF::loadView('peserta.tiket', $data)->setOptions(['defaultFont' => 'sans-serif',
        //                                                                                 'enable_remote' => true,
        //                                                                                 'chroot'  => public_path('storage')]);
        // return $pdf->download('tiket.pdf');
    }

    public function editstatus(Request $request,$id){
        $peserta = Pendaftaran::find($id);
        $peserta->status = $request->input('status');
        $peserta->update();

        return redirect('/mainevent')->with('status', 'Status berhasil diubah');

    }
}
