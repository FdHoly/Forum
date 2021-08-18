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
        return $this->belongsTo(Groups::class, 'id_users', 'id_users');
    }
    public function utas()
    {
        return $this->hasMany(Utas::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id_users');
    }
}
