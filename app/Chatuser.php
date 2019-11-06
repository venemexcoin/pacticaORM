<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Chatuser extends Model
{
    protected $fillable = [
        'user_id', 'name'
    ];

    public function Chat()
    {

        return $this->hasMany(Chat::class);
    }
}
