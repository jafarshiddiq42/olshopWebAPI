<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suratmasuks = [
            [
                'noSurat'=>'12',
                'asalSurat'=>'BPJS',
                'klasifikasi_id'=>1,
                'user_id'=>2,
                'notif'=>0,
            ],
            [
                'noSurat'=>'15',
                'asalSurat'=>'Kemhan',
                'klasifikasi_id'=>1,
                'user_id'=>2,
                'notif'=>0,
            ]
        ];

        foreach ($suratmasuks as $suratmasuk) {
            DB::table('suratmasuks')->insert($suratmasuk);
        }
    }
}
