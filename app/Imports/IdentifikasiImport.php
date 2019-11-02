<?php

namespace App\Imports;

use App\Identifikasi;
use Maatwebsite\Excel\Concerns\ToModel;

class IdentifikasiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Identifikasi([
            'nama'     => $row[0],
            'kawin'    => $row[1],
            'jeniskelamin'    => $row[2], 
            'tempatlahir'    => $row[3], 
            'tanggallahir'    => $row[4], 
            'alamat'    => $row[5],
            'provinsi'    => $row[6], 
            'kabupaten'    => $row[7], 
            'kecamatan'    => $row[8],
            'kelurahan'    => $row[9],   
        ]);
    }
}
