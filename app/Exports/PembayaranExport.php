<?php

namespace App\Exports;

use App\Models\Pembayaran;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PembayaranExport implements FromArray, WithHeadings, WithStyles
{
    
    public function array(): array
    {
        $pembayarans = DB::select(DB::raw("SELECT pembayarans.id as pembayaran_id, pesertas.nama, users.email, pembayarans.age, pendaftarans.kontak, 
                                            pembayarans.institute, pesertas.angkatan, pendaftarans.metode_bayar, pembayarans.created_at, 
                                            (case 
                                            when pembayarans.status = 0 then 'Unverified'
                                            when pembayarans.status = 1 then 'Verified'
                                            else 'Pembayaran Salah'
                                            end ) as status
                                            FROM users
                                            JOIN pesertas ON users.id = pesertas.user_id
                                            JOIN pendaftarans ON pesertas.id = pendaftarans.peserta_id
                                            RIGHT JOIN pembayarans ON pendaftarans.id = pembayarans.pendaftaran_id;"
        ));
        
        return $pembayarans;
    }

    public function headings(): array
    {
        return [
            'No.', 
            'Nama', 
            'Email', 
            'Umur', 
            'Kontak', 
            'Institut', 
            'Angkatan', 
            'Metode Bayar', 
            'Tanggal Bayar', 
            'Status Pembayaran'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
        // Style the first row as bold text.
        1    => ['font' => ['bold' => true]],
        ];
    }
}
