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



            ],
            [
                'nama' => 'Universitas Indonesia',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'nama' => 'Universitas Pertanian',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'nama' => 'Institute Pertanian Bogor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'nama' => 'BINUS',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]
        ];
        foreach ($univ as $Xample) {
            Universitas::create($Xample);
        }
    }
}
