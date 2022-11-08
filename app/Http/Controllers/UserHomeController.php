<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('peserta.home',[
            "title" => "TEDxUniversitasAirlangga"
        ]);
    }

    public function form()
    {
        $peserta = Peserta::where('user_id', Auth::user()->id)->get();

        return view('peserta.form',[
            'title' => 'TEDxUniversitasAirlangga',
            'peserta' => $peserta
        ]);
    }

    public function status()
    {
        // $peserta = Peserta::where('user_id', Auth::user()->id)->with(['pendaftaran'=>function($query){
        //             $query->where('event_id' , '=', '2');
        //             }])->get();
        $userid = Auth::user()->id;
        $subevent = DB::select( DB::raw("SELECT pesertas.nama, pendaftarans.event_id as event, pendaftarans.kontak, pendaftarans.link_gdrive, pendaftarans.status
                                        FROM pesertas join pendaftarans
                                        on(pesertas.id = pendaftarans.peserta_id)
                                        where pesertas.user_id = $userid and pendaftarans.event_id = 2;"));

        // dd($subevent);
        // Peserta::where('user_id', Auth::user()->id)->with('pendaftaran')->get();

        // QUERY DI BAWAH BISA MENGEMBALIKAN PESERTA YANG DAFTAR SUBEVENT TAPI MASIH BINGUNG NGE SELECTNYA
        // $userid = Auth::user()->id;
        $mainevent = DB::select( DB::raw("SELECT pendaftarans.id as id_pendaftaran, pesertas.nama, pendaftarans.event_id as event, pendaftarans.kontak, pembayarans.status
                                    FROM pesertas join pendaftarans
                                    on(pesertas.id = pendaftarans.peserta_id)
                                    join pembayarans
                                    on(pendaftarans.id = pembayarans.pendaftaran_peserta_id)
                                    where pesertas.user_id = $userid and pendaftarans.event_id = 1;"));
        // dd($mainevent);


        return view('peserta.status',[
            'title' => 'TEDx Universitas Airlangga',
            'subevent' => $subevent,
            'mainevent' => $mainevent
        ]);
    }

    public function formMain()
    {
        $peserta = Peserta::where('user_id', Auth::user()->id)->get();

        return view('peserta.formMain',[
            'title' => 'TEDxUniversitasAirlangga',
            'peserta' => $peserta
        ]);
    }

}
