<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Universitas;
use Carbon\Carbon;

class univSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */




    public function run()
    {
        $univ = [
            [
                'nama' => 'Universitas Brawijaya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deskripsi' => 'Universitas di Malang',
                'logo_url' => '-',


            ],
            [
                'nama' => 'Universitas Indonesia',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deskripsi' => 'Universitas di Depok',
                'logo_url' => '-',

            ],
            [
                'nama' => 'Universitas Pertanian',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deskripsi' => 'Universitas studi pertanian',
                'logo_url' => '-',

            ],
            [
                'nama' => 'Institute Pertanian Bogor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deskripsi' => 'IPB Bogor',
                'logo_url' => '-',

            ],
            [
                'nama' => 'BINUS',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deskripsi' => 'Bina Nusantara',
                'logo_url' => '-',

            ]
        ];
        foreach ($univ as $Xample) {
            Universitas::create($Xample);
        }
    }
}
