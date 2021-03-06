<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bb extends Model
{
    protected $table='bikinibottom';
    protected $fillable = [
        'name', 'house', 'text','img_url','collection','type_id','price'
    ];

    public function bb_type(){
        return $this->belongsTo('App\bbtype','type_id');
    }

    public function bbimg(){
        return $this->hasMany('App\bbimg','sort');
    }
}
