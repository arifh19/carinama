<?php

namespace App\Exports;

use App\Training;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrainingExport implements FromCollection 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Training::all();
    }
    
}
