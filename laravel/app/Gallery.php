<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['user_id','type','heading','caption','image'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
