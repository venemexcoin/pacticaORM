<?php

namespace App;


use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Profile;
use App\Profil;


class User extends Authenticatable
{
    use Notifiable, HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level_id', 'name', 'email', 'password', 'btc', 'eth', 'vmx', 'usd', 'mxn', 'bss', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function profile()
    {
        return $this->hasOne(Profile::class);
    }


    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    public function groups()
    {
        return $this->belongsToMany(Group::class)->withTimestamps();
    }
    public function location()
    {
        return $this->hasOneThrough(Location::class, Profile::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
