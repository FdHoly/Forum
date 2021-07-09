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
        return $this->hasMany(Report::class);
    }
    public function usergroup()
    {
        return $this->belongsTo(UserGroup::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replyutas()
    {
        return $this->hasMany(ReplyUtas::class);
    }
}
