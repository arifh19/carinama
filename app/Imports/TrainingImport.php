<?php

namespace App\Imports;

use App\Training;
use Maatwebsite\Excel\Concerns\ToModel;

class TrainingImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $jenis;
    public function __construct($data)
    {
        $this->jenis = $data;
    }
    public function model(array $row)
    {
        return new Training([
            'nama'     => $row[0],
            'klasifikasi'    => $this->jenis, 
        ]);
    }
}
