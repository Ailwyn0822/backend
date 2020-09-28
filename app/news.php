<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable = [
        'title', 'sub_title', 'img_url','content'
    ];
}
