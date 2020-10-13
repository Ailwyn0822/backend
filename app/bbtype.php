<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bbtype extends Model
{
    protected $table='bikinibottomtype';
    protected $fillable = [
        'type_name', 'sort'
    ];

    public function bb(){
        return $this->hasMany('App\bb','type_id');
    }
}
