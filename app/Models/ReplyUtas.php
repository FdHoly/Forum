<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyUtas extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'replys';


    public function utas()
    {
        return $this->belongsTo(Utas::class, 'id_utas', 'id_utas');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id_users');
    }
}
