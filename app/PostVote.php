<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class PostVote extends Model
{
    protected $fillable = ['user_id', 'post_id', 'vote'];

    public function post()
    {
        return $this->belongsTo(Chat::class);
    }
}
