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
            'nama' => $row[0],
            'a'    => $row[1],
            'b'    => $row[2], 
            'c'    => $row[3], 
            'd'    => $row[4], 
            'e'    => $row[5],
            'f'    => $row[6], 
            'g'    => $row[7], 
            'h'    => $row[8],
            'i'    => $row[9],
            'j'    => $row[10],
            'k'    => $row[11],
            'l'    => $row[12],
            'm'    => $row[13], 
            'n'    => $row[14], 
        ]);
    }
}
