<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Events;
use Carbon\Carbon;

class acaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $acara = [
            [
                'judul' => 'Dies Natalis',
                'konten' => 'ini kontennya',
                'image_url' => 'ini logo url',
                'status' => '1',
                'id_users' => '1',
                'id_groups' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Open House',
                'konten' => 'ini kontennya',
                'image_url' => 'ini logo url',
                'status' => '1',
                'id_users' => '1',
                'id_groups' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Weekend Party',
                'konten' => 'ini kontennya',
                'image_url' => 'ini logo url',
                'status' => '1',
                'id_users' => '2',
                'id_groups' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach ($acara as $Xample) {
            Events::create($Xample);
        }
    }
}
