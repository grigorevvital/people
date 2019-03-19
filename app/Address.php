<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['street', 'city', 'country', 'house_number', ];

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
