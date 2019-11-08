<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Chatuser;

class Chat extends Model
{
    protected $fillable = [
        'user_id', 'title', 'description', 'url'
    ];

    protected $castes = ['user_id' => 'integer'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->orderBy('id', 'ASC');
    }

    public function votes()
    {
        return $this->hasMany(PostVote::class);
    }

    public function wasCreatedBy($user)
    {
        if (is_null($user)) {
            return false;
        }

        return $this->user_id === $user->id;
    }

    public function totalVotes()
    {
        return $this->votes()->sum('vote');
    }
}
