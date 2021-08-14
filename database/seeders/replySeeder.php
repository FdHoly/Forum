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
                'konten' => 'Konten 1 Many desktop publishing packages and web page editors now use Lorem Ipsum as
                their
                default model text, and a search for',
                'waktu' => '2020-12-31 23:59:59',

                'id_users' => '1',
                'id_utas' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'konten' => 'Konten 2 Many desktop publishing packages and web page editors now use Lorem Ipsum as
                their
                default model text, and a search for',
                'waktu' => '2021-7-20 23:59:59',

                'id_users' => '2',
                'id_utas' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'konten' => 'Konten 3 Many desktop publishing packages and web page editors now use Lorem Ipsum as
                their
                default model text, and a search for',
                'waktu' => '2021-5-30 23:59:59',

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
