<?php

namespace App\Exports;

use App\Identifikasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class IdentifikasiExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Identifikasi::all();
    }
    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Klasifikasi',
            'Nikah',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Alamat',
            'Provinsi',
            'Kabupaten',
            'Kecamatan',
            'Kelurahan',
            'dibuat_pada',
            'diubah'
        ];
    }
}
