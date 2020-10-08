<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table='news';
    protected $fillable = [
        'title', 'sub_title', 'img_url','content','file'
    ];
}
