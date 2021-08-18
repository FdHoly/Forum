<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;
    // protected $table = ;

    protected $guarded = [];

    public function group()
    {
<<<<<<< HEAD
        return $this->belongsTo(Groups::class, 'id_groups', 'id_groups');
=======
        return $this->belongsTo(Groups::class, 'id_users', 'id_users');
    }
    public function utas()
    {
        return $this->hasMany(Utas::class);
>>>>>>> bfca07cfa7aed48766e4787456435d5b11cd6dee
    }
    
    public function user()
    {
<<<<<<< HEAD
        return $this->belongsToMany(User::class, 'id_users', 'id_users');
=======
        return $this->belongsTo(User::class, 'id_users', 'id_users');
>>>>>>> bfca07cfa7aed48766e4787456435d5b11cd6dee
    }
}
