<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    public $primaryKey = 'id_dosen';
    protected $table = 'tb_dosen';
    protected $fillable = [
        'nama','image_path'
    ];
}
