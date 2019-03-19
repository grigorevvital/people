<?php

namespace App;
use Storage;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['address_id', 'info_id', 'first_name', 'last_name', 'bith_year', ];
    protected $table = 'persons';

    public function address()
    {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }

    public function info()
    {
        return $this->hasOne(Info::class, 'id', 'info_id');
    }

    public function getPersonFullAddress() : string
    {
        $address = $this->address()->first();
        if ($address) {
            return $address->country. ' ' .$address->city. ' ' .$address->street. ' '.$address->house_number;
        }

        return null;
    }

    public function getFullName()
    {
        return $this->first_name.' '.$this->last_name;
    }

    public function getUserPhoto()
    {
        $files = Storage::disk('local')->files('public/photos/'.$this->id);
        if (is_array($files) && isset($files[0]))
            return str_replace('public', 'storage', $files[0]);
        return null;
    }
}
