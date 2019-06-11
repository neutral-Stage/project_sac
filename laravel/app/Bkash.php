<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bkash extends Model
{
    protected $fillable = ['name','phone','amount','invoice','donated_for','address','status'];
}
