<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pengumuman extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'announcements';


    public function group()
    {
        return $this->belongsTo(Groups::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
