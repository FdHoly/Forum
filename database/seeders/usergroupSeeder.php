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
            [
                'role' => '1',
                'id_users' => '1',
                'id_groups' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role' => '1',
                'id_users' => '1',
                'id_groups' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role' => '1',
                'id_users' => '2',
                'id_groups' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach ($ug as $Xample) {
            UserGroup::create($Xample);
        }
    }
}
