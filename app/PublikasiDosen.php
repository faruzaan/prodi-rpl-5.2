<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublikasiDosen extends Model
{
    public $primaryKey = 'id_publikasi';
    protected $table = 'tb_publikasi_dosen';
    protected $fillable = [
        'id_dosen','nama'
    ];
    public function dosen()
    {
        return $this->hasOne('\App\Dosen','id_dosen','id_dosen');
    }
}
