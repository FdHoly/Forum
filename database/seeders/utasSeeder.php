<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Utas;
use Carbon\Carbon;

class utasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $utas = [
            [
                'judul' => 'Judul1',
                'konten' => 'konten1',
                'waktu' => '2021-5-31 20:59:59',
                'status' => '1',
                'image_url' => 'ini logo url',
                'id_users' => '1',
                'id_groups' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Judul2',
                'konten' => 'konten2',
                'waktu' => '2021-7-17 20:59:59',
                'status' => '1',
                'image_url' => 'ini logo url',
                'id_users' => '1',
                'id_groups' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Judul3',
                'konten' => 'konten3',
                'waktu' => '2011-12-31 20:59:59',
                'status' => '2',
                'image_url' => 'ini logo url',
                'id_users' => '1',
                'id_groups' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach ($utas as $Xample) {
            Utas::create($Xample);
        }
    }
}
