<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                'email' => 'Alamat1@email.com',
                'name' => 'Nama Lengkap1',
                'password' => 'password',
                'role' => '1',
                'profil_image_url' => 'ini logo url',
                'background_image_url' => 'ini logo url',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'email' => 'Alamat2@email.com',
                'name' => 'Nama Lengkap2',
                'password' => 'password',
                'role' => '1',
                'profil_image_url' => 'ini logo url',
                'background_image_url' => 'ini logo url',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'email' => 'Alamat3@email.com',
                'name' => 'Nama Lengkap3',
                'password' => 'password',
                'role' => '1',
                'profil_image_url' => 'ini logo url',
                'background_image_url' => 'ini logo url',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach ($user as $Xample) {
            User::create($Xample);
        }
    }
}
