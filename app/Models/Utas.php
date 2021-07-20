<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utas extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function report()
    {
        return $this->hasMany(Report::class, 'id_utas', 'id_utas');
    }
    public function group()
    {
        return $this->belongsTo(Groups::class, 'id_groups', 'id_groups');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id_users');
    }
    public function replyutas()
    {
        return $this->hasMany(ReplyUtas::class, 'id_utas', 'id_utas');
    }
}
