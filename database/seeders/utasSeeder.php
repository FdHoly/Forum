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
                'status' => '0',
                'image_url' => 'ini logo url',
                'id_users' => '1',
                'id_groups' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Judul2',
                'konten' => 'konten2',
                'status' => '1',
                'image_url' => 'ini logo url',
                'id_users' => '2',
                'id_groups' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Judul3',
                'konten' => 'konten3',
                'status' => '0',
                'image_url' => 'ini logo url',
                'id_users' => '3',
                'id_groups' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Post ini keempat',
                'konten' => 'ini konten dibuat untuk memenuhi post ke 4',
                'status' => '0',
                'image_url' => 'ini logo url',
                'id_users' => '3',
                'id_groups' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Post ini keempat',
                'konten' => 'ini konten dibuat sebagai post ke 5',
                'status' => '0',
                'image_url' => 'ini logo url',
                'id_users' => '3',
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
