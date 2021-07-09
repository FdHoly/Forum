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

    public function universitas()
    {
        return $this->belongsTo(Universitas::class);
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
