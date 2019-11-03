<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'Profile_id', 'country'
    ];
    public function profile()
    {
        // return $this->belongsTo(Profile::class);
    }
}
