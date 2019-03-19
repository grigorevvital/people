<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ['info'];

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
