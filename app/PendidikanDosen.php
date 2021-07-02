<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanDosen extends Model
{
    public $primaryKey = 'id_pendidikan';
    protected $table = 'tb_pendidikan_dosen';
    protected $fillable = [
        'id_dosen','nama'
    ];
    public function dosen()
    {
        return $this->hasOne('\App\Dosen','id_dosen','id_dosen');
    }
}
