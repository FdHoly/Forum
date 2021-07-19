<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function utas()
    {
        return $this->belongsTo(Utas::class, 'id_utas', 'id_utas');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id_users');
    }
    public function group()
    {
        return $this->belongsTo(Groups::class, 'id_groups', 'id_groups');
    }
}
