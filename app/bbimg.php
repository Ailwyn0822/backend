<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bbimg extends Model
{
    protected $table='bbimg';
    protected $fillable = [
        'img_url', 'sort'
    ];

}
