<?php

namespace App\Exports;

use App\Identifikasi;
use Maatwebsite\Excel\Concerns\FromCollection;

class IdentifikasiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Identifikasi::all();
    }
}
