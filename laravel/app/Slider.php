<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['user_id','type','title_1','title_2','body_text','image'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
