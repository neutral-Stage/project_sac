<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ucimage extends Model
{
    protected $fillable =['ucevent_id','image'];

    public function ucevent()
    {
        return $this->belongsTo('App\Ucevent','ucevent_id');
    }
}
