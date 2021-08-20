<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Groups;
use Carbon\Carbon;

class orgSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = [
            [
                'nama' => 'BEM FEB',
                'deskripsi' => 'ini desc',
                'logo_url' => 'ini logo url',
                'id_univ' => '1',
                'logo_url' => '1629444303.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama' => 'BEM FIB',
                'deskripsi' => 'ini desc',
                'logo_url' => 'ini logo url',
                'id_univ' => '2',
                'logo_url' => '1629444303.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama' => 'BEM FILKOM',
                'deskripsi' => 'Universitas Brawijaya',
                'logo_url' => 'ini logo url',
                'id_univ' => '2',
                'logo_url' => '1629444303.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama' => 'PPU',
                'deskripsi' => 'Persatuan Petani Universitas',
                'logo_url' => 'ini logo url',
                'id_univ' => '3',
                'logo_url' => '1629444303.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama' => 'EM UI',
                'deskripsi' => 'Eksekutif Mahasiswa Universitas Indonesia',
                'logo_url' => 'ini logo url',
                'id_univ' => '2',
                'logo_url' => '1629444303.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach ($group as $Xample) {
            Groups::create($Xample);
        }
    }
}
