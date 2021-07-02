<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    public $primaryKey = 'id_berita';
    protected $table = 'tb_berita';
    protected $fillable = [
        'judul','desc','image_path'
    ];
}
