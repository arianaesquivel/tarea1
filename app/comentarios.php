<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentarios extends Model
{
    protected $fillable = [
        'nombre', 'post_id'
    ];
}
