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
        return $this->hasMany(UserGroup::class, 'id_groups', 'id_groups');
    }
    public function pengumuman()
    {
        return $this->hasMany(Pengumuman::class, 'id_groups', 'id_groups');
    }
    public function acara()
    {
        return $this->hasMany(Events::class, 'id_groups', 'id_groups');
    }
    public function rapat()
    {
        return $this->hasMany(Rapat::class, 'id_groups', 'id_groups');
    }
    public function utas()
    {
        return $this->hasMany(Utas::class, 'id_groups', 'id_groups');
    }
    // public function report()
    // {
    //     return $this->hasMany(Utas::class, 'id_groups', 'id_groups');
    // }
}
