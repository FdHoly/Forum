<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            userSeeder::class,
            univSeeders::class,
            orgSeeders::class,
            pengumumanSeeder::class,
            acaraSeeder::class,
            rapatSeeder::class,
            utasSeeder::class,
            usergroupSeeder::class,
            replySeeder::class,
            reportSeeder::class,
        ]);
    }
}
