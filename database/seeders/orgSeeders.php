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
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama' => 'BEM FEB',
                'deskripsi' => 'ini desc',
                'logo_url' => 'ini logo url',
                'id_univ' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama' => 'BEM FILKOM',
                'deskripsi' => 'Universitas Brawijaya',
                'logo_url' => 'ini logo url',
                'id_univ' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach($group as $Xample){
            Groups::create($Xample);
        }
    }
}
