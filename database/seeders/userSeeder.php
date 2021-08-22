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
                'id_univ' => '1',
                'profil_image_url' => 'avatar/8IGlHeiBX4YnzZyOspAGHOvP026zrw1PJrcJ91Vg.png',
                'background_image_url' => 'avatar/8IGlHeiBX4YnzZyOspAGHOvP026zrw1PJrcJ91Vg.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'email' => 'Alamat2@email.com',
                'name' => 'Nama Lengkap2',
                'password' => 'password',
                'role' => '1',
                'id_univ' => '2',
                'profil_image_url' => 'avatar/8IGlHeiBX4YnzZyOspAGHOvP026zrw1PJrcJ91Vg.png',
                'background_image_url' => 'avatar/8IGlHeiBX4YnzZyOspAGHOvP026zrw1PJrcJ91Vg.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'email' => 'Alamat3@email.com',
                'name' => 'Nama Lengkap3',
                'password' => 'password',
                'role' => '1',
                'id_univ' => '3',
                'biodata' => 'My name is name and yes',
                'profil_image_url' => 'avatar/8IGlHeiBX4YnzZyOspAGHOvP026zrw1PJrcJ91Vg.png',
                'background_image_url' => 'avatar/8IGlHeiBX4YnzZyOspAGHOvP026zrw1PJrcJ91Vg.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'email' => 'mail@mail.com',
                'name' => 'My Name',
                'password' => '$2y$10$cyGfwNU4R3ljLcOW4NktxOZ3yoYS3ZZSqr3ZXEnd3lLLdSC4ESPEu',
                'role' => '1',
                'id_univ' => '3',
                'profil_image_url' => 'avatar/8IGlHeiBX4YnzZyOspAGHOvP026zrw1PJrcJ91Vg.png',
                'background_image_url' => 'avatar/8IGlHeiBX4YnzZyOspAGHOvP026zrw1PJrcJ91Vg.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Brent Carson',
                'email' => 'lygoduhu@mailinator.com',
                'biodata' => 'Hi im a student from BINUS University 7th semester',
                'password' => '$2y$10$YI2g1Gp2pJzoSlVpzP1/8u9sKQY65TylT9UVK2LSZxoRXPXP79CR.',
                'role' => '1',
                'profil_image_url' => 'avatar/8IGlHeiBX4YnzZyOspAGHOvP026zrw1PJrcJ91Vg.png',
                'background_image_url' => 'avatar/8IGlHeiBX4YnzZyOspAGHOvP026zrw1PJrcJ91Vg.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'id_univ' => '5'
            ]

        ];
        foreach ($user as $Xample) {
            User::create($Xample);
        }
    }
}
