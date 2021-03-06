<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universitas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_univ';

    protected $table = 'universitas';

    protected $fillable = [
        'nama'
    ];

    public function groups()
    {
        return $this->hasMany(Groups::class, 'id_univ', 'id_univ');
    }
}
