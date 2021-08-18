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
        return $this->belongsTo(Groups::class, 'id_groups', 'id_groups');
    }
    
    public function user()
    {
        return $this->belongsToMany(User::class, 'id_users', 'id_users');
    }
}
