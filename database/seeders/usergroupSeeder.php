<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserGroup;
use Carbon\Carbon;

class usergroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ug = [
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '3', 'id_users' => '5', 'id_groups' => '1'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '3', 'id_users' => '5', 'id_groups' => '2'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '1', 'id_users' => '5', 'id_groups' => '3'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '1', 'id_users' => '5', 'id_groups' => '4'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '1', 'id_users' => '5', 'id_groups' => '5'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '2', 'id_users' => '1', 'id_groups' => '1'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '2', 'id_users' => '2', 'id_groups' => '2'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '1', 'id_users' => '3', 'id_groups' => '3'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '1', 'id_users' => '4', 'id_groups' => '4'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '1', 'id_users' => '7', 'id_groups' => '5'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '1', 'id_users' => '6', 'id_groups' => '1'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '1', 'id_users' => '6', 'id_groups' => '2'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '1', 'id_users' => '2', 'id_groups' => '3'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '1', 'id_users' => '1', 'id_groups' => '4'],
            ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'role' => '1', 'id_users' => '7', 'id_groups' => '2'],
        ];
        foreach ($ug as $Xample) {
            UserGroup::create($Xample);
        }
    }
}
