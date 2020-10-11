<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bb extends Model
{
    protected $table='bikinibottom';
    protected $fillable = [
        'name', 'house', 'text','img_url','collection'
    ];
}
