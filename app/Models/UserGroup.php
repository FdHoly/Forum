<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserGroup extends Model
{
    use HasFactory;
    // protected $table = ;
    protected $primaryKey = 'id_user_groups';

    protected $guarded = [];

    public function group()
    {
        return $this->belongsTo(Groups::class, 'id_groups', 'id_groups');
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
