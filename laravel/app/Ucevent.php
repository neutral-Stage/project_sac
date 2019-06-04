<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ucevent extends Model
{
    protected $fillable = ['type','name','start_date','end_date','detail'];

    public function ucevent()
    {
        return $this->hasMany('App\Ucimage','ucevent_id');
    }
}
