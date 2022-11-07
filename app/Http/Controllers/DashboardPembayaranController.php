<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DashboardPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayarans = DB::select(DB::raw("SELECT pembayarans.id as pembayaran_id, pesertas.nama, users.email, pembayarans.age, pendaftarans.kontak, 
                                            pembayarans.institute, pesertas.angkatan, pendaftarans.metode_bayar, pembayarans.created_at, 
                                            pembayarans.bukti_bayar, pembayarans.status
                                            FROM users
                                            JOIN pesertas ON users.id = pesertas.user_id
                                            JOIN pendaftarans ON pesertas.id = pendaftarans.peserta_id
                                            RIGHT JOIN pembayarans ON pendaftarans.id = pembayarans.pendaftaran_id;"
        ));

        return view('admin.pembayaran', compact('pembayarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $mainevent_bayar)
    {
        $validator = Validator::make($request->all(), [
            'status'=>'required'
        ]);
        if($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        } else {                
            $status_update = Pembayaran::find($mainevent_bayar->id);
            if ($status_update) {
                $status_update->status = $request->input('status');
                $status_update->update();
                return response()->json([
                    'data' => $status_update->status,
                    'status'=>200,
                    'message'=>'Status Edited!',
                ]);
            } else {
                return response()->json([
                    'status'=>404,
                    'message'=>'Data Not Found',
                ]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
