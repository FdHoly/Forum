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
                'deskripsi' => 'Universitas Brawijaya',
                'logo_url' => 'ini logo url',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama' => 'Universitas Brawijaya',
                'deskripsi' => 'Universitas Brawijaya',
                'logo_url' => 'ini logo url',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        foreach($univ as $Xample){
            Universitas::create($Xample);
        }
    }
}
