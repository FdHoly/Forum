<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengumuman;
use Carbon\Carbon;

class pengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pengumuman = [
            [
                'judul' => 'Open Recruitment',
                'konten' => 'Halo dimensi kreasi 👋
                Pada sehat semua kan? Sehatlah ya jangan sakit sakitt
                Jadi berkaitan dengan pdh himpunan yang bentar lagi jadi, dari entre mau ngedata pelunasan pembayaran pdh.

                Pembayaran PDH sebesar Rp 150k. Untuk yang membayar DP Rp 75k kemarin dapat melakukan pelunasan paling lambat tanggal

                Untuk pembayaran bisa transfer ke
                BCA = 3680266441 a/n Dinar Fairus Salsabillah
                OVO = 089602649130 a/n Dinar Fairus Salsabillah

                Pelunasan dan bukti tf bisa isi disini yaa
                https://forms.gle/gKUsq34jLeSSnWnt6
                Terima kasih semuanyaaaa sehat sehat terusss luvvvyuall 🖤',
                'id_users' => '1',
                'id_groups' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Incoming Events',
                'konten' => 'ini kontennya',
                'id_users' => '1',
                'id_groups' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Pergantian Kepengurusan',
                'konten' => 'ini kontennya',
                'id_users' => '3',
                'id_groups' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach ($pengumuman as $Xample) {
            Pengumuman::create($Xample);
        }
    }
}
