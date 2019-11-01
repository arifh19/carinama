<?php

namespace App\Imports;

use App\Training;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Training([
            'nama'     => $row[0],
            'klasifikasi'    => $row[1], 
        ]);
    }
}
