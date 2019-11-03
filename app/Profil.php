<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peofil extends Model
{
    protected $fillable = [
        'user_id', 'nombre', 'apellido', 'address1', 'address2', 'telefon', 'facebook', 'instagram', 'web'
    ];
    public function location()
    {

        return $this->hasOne(Location::class);
    }
}
