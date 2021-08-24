<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Groups;
use Carbon\Carbon;

class orgSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = [
            [
                'nama' => 'BEM FEB UB',
                'deskripsi' => 'ini desc',
                'logo_url' => 'ini logo url',
                'id_univ' => '1',
                'logo_url' => 'logo/C3jmL34LiAEBBJKC3Knsp1EOe1ggM1Oa4VsiFNRm.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama' => 'BEM FIB UI',
                'deskripsi' => 'ini desc',
                'logo_url' => 'ini logo url',
                'id_univ' => '2',
                'logo_url' => 'logo/C3jmL34LiAEBBJKC3Knsp1EOe1ggM1Oa4VsiFNRm.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama' => 'BEM FILKOM UB',
                'deskripsi' => 'Fakultas Ilmu Komputer',
                'logo_url' => 'ini logo url',
                'id_univ' => '1',
                'logo_url' => 'logo/C3jmL34LiAEBBJKC3Knsp1EOe1ggM1Oa4VsiFNRm.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama' => 'PPU ITP',
                'deskripsi' => 'Persatuan Petani Universitas',
                'logo_url' => 'ini logo url',
                'id_univ' => '4',
                'logo_url' => 'logo/C3jmL34LiAEBBJKC3Knsp1EOe1ggM1Oa4VsiFNRm.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama' => 'EM UI',
                'deskripsi' => 'Eksekutif Mahasiswa Universitas Indonesia',
                'logo_url' => 'ini logo url',
                'id_univ' => '2',
                'logo_url' => 'logo/C3jmL34LiAEBBJKC3Knsp1EOe1ggM1Oa4VsiFNRm.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama' => 'EM UB',
                'deskripsi' => 'Eksekutif Mahasiswa Universitas Brawijaya',
                'logo_url' => 'ini logo url',
                'id_univ' => '1',
                'logo_url' => 'logo/C3jmL34LiAEBBJKC3Knsp1EOe1ggM1Oa4VsiFNRm.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama' => 'DPM UB',
                'deskripsi' => 'Dewan Perwakilan Mahasiswa Universitas Brawijaya',
                'logo_url' => 'ini logo url',
                'id_univ' => '1',
                'logo_url' => 'logo/C3jmL34LiAEBBJKC3Knsp1EOe1ggM1Oa4VsiFNRm.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ];
        foreach ($group as $Xample) {
            Groups::create($Xample);
        }
    }
}
