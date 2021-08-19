<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengumuman;
use Carbon\Carbon;

class pengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pengumuman = [
            [
                'judul' => 'Open Recruitment',
                'konten' => 'ini kontennya',
                'image_url' => 'ini logo url',
                'status' => '1',
                'id_users' => '1',
                'id_groups' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Incoming Events',
                'konten' => 'ini kontennya',
                'image_url' => 'ini logo url',
                'status' => '1',
                'id_users' => '1',
                'id_groups' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Pergantian Kepengurusan',
                'konten' => 'ini kontennya',
                'image_url' => 'ini logo url',
                'status' => '1',
                'id_users' => '3',
                'id_groups' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach ($pengumuman as $Xample) {
            Pengumuman::create($Xample);
        }
    }
}
