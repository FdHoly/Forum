<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_groups';

    protected $table = 'groups';

    protected $fillable = [
        'nama',
        'deskripsi',
        'logo_url',
        'id_univ',
    ];

    public function universitas()
    {
        return $this->belongsTo(Universitas::class, 'id_univ', 'id_univ');
    }

    public function usergroup()
    {
        return $this->hasMany(UserGroup::class);
    }
    public function pengumuman()
    {
        return $this->hasMany(Pengumuman::class);
    }
    public function acara()
    {
        return $this->hasMany(Acara::class);
    }
    public function rapat()
    {
        return $this->hasMany(Rapat::class);
    }
}
