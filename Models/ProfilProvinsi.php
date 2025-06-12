<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilProvinsi extends Model
{
    use HasFactory;
    protected $table = 'profil_provinsis';
    protected $fillable = [
        'provinsi_id',
        'tahun',
        'populasi',
        'gdp',
        'jml_sd',
        'jml_smp',
        'jml_sma',
        'jml_pt',
    ];


    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }
}
