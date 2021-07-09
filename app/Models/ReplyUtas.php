<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyUtas extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function utas()
    {
        return $this->belongsTo(Utas::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
