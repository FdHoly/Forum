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
                'email' => 'Nama Lengkap1',
                'name' => 'Alamat1@email.com',
                'password' => 'password',
                'role' => '1',
                'profil_image_url' => 'ini logo url',
                'background_image_url' => 'ini logo url',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'email' => 'Nama Lengkap2',
                'name' => 'Alamat2@email.com',
                'password' => 'password',
                'role' => '1',
                'profil_image_url' => 'ini logo url',
                'background_image_url' => 'ini logo url',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'email' => 'Nama Lengkap3',
                'name' => 'Alamat3@email.com',
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
