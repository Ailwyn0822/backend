<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    protected $table='place';
    protected $fillable = [
        'email', 'place', 'file','place_name','place_text'
    ];

}
