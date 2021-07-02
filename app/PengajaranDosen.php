<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengajaranDosen extends Model
{
    public $primaryKey = 'id_pengajaran';
    protected $table = 'tb_pengajaran_dosen';
    protected $fillable = [
        'id_dosen','nama'
    ];
    public function dosen()
    {
        return $this->hasOne('\App\Dosen','id_dosen','id_dosen');
    }
}
