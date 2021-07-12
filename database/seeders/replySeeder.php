<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReplyUtas;
use Carbon\Carbon;

class replySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $reply = [
            [
                'konten' => 'konten1',
                'waktu' => '9999-12-31 23:59:59',
                'image_url' => 'ini logo url',
                'id_users' => '1',
                'id_utas' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'konten' => 'konten2',
                'waktu' => '9999-12-31 23:59:59',
                'image_url' => 'ini logo url',
                'id_users' => '2',
                'id_utas' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'konten' => 'konten3',
                'waktu' => '9999-12-31 23:59:59',
                'image_url' => 'ini logo url',
                'id_users' => '3',
                'id_utas' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach ($reply as $Xample) {
            ReplyUtas::create($Xample);
        }
    }
}
