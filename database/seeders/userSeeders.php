<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class userSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
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
        foreach($data as $Xample){
            User::create($Xample);
        }
    }
}
