<?php

namespace App;

use App\Identifikasi;
use Illuminate\Database\Eloquent\Model;

class Identifikasi extends Model
{
    public $fillable = ['nama','kawin','jeniskelamin','tempatlahir','tanggallahir','alamat','provinsi','kabupaten','kecamatan','kelurahan'];
}
