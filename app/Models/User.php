<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'id_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];




    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function utas()
    {
        return $this->hasMany(Utas::class, 'id_users', 'id_users');
    }
    public function report()
    {
        return $this->hasMany(Report::class, 'id_users', 'id_users');
    }
    public function UserGroup()
    {
        return $this->hasMany(UserGroup::class, 'id_users', 'id_users');
    }
    public function group()
    {
        return $this->belongsToMany(Groups::class, 'user_groups', 'id_users', 'id_users')->withPivot('role');
    }
    public function universitas()
    {
        return $this->belongsTo(Universitas::class, 'id_univ', 'id_univ');
    }
    public function replyutas()
    {
        return $this->hasMany(ReplyUtas::class, 'id_users', 'id_users');
    }
}
