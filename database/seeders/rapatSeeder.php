<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rapat;
use Carbon\Carbon;

class rapatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rapat = [
            [
                'judul' => 'Rapat BPH',
                'konten' => 'ini kontennya',
                'image_url' => 'ini logo url',
                'status' => '1',
                'waktu' => '2021-4-9 20:59:59',
                'id_users' => '1',
                'id_groups' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Rapat Besar',
                'konten' => 'ini kontennya',
                'image_url' => 'ini logo url',
                'status' => '1',
                'waktu' => '2021-5-15 20:59:59',
                'id_users' => '1',
                'id_groups' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Sidang Umum',
                'konten' => 'ini kontennya',
                'image_url' => 'ini logo url',
                'status' => '1',
                'waktu' => '2021-6-21 20:59:59',
                'id_users' => '1',
                'id_groups' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach ($rapat as $Xample) {
            Rapat::create($Xample);
        }
    }
}
