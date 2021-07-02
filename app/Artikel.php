<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    public $primaryKey = 'id_artikel';

    protected $table = 'tb_artikel';
    
    protected $fillable = [
        'judul','desc','image_path','user_id'
    ];
}
