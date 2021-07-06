<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'groups';

    protected $fillable = [
        'nama',
        'deskripsi',
        'logo_url',
        'universitas_id',
    ];

    public function genre()
    {
        return $this->belongsToMany(genre::class, 'pivot', 'id_film', 'id_genre');
    }

    public function transaksi()
    {
        return $this->hasMany(transaksi::class, 'id_film', 'id_film');
    }
}
