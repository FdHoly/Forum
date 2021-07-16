<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report;
use Carbon\Carbon;

class reportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $report = [
            [
                'alasan' => 'Konten1',
                'waktu' => '2099-12-31 23:59:59',
                'id_users' => '1',
                'id_groups' => '1',
                'id_utas' => '2',
            ],
            [
                'alasan' => 'Konten2',
                'waktu' => '2099-12-31 23:59:59',
                'id_users' => '2',
                'id_groups' => '2',
                'id_utas' => '2',
            ],
            [
                'alasan' => 'Konten3',
                'waktu' => '2099-12-31 23:59:59',
                'id_users' => '3',
                'id_groups' => '1',
                'id_utas' => '1',
            ],
        ];
        foreach ($report as $Xample) {
            Report::create($Xample);
        }
    }
}