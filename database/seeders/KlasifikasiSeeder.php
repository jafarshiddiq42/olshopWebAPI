<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KlasifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $klasifikasis= [
            [
                'kode'=>'B',
                'nama'=>'Biasa',
                'Uraian'=>'Surat Internal',
            ],
            [
                'kode'=>'C',
                'nama'=>'Cito',
                'Uraian'=>'Surat Internal',
            ],
            [
                'kode'=>'R',
                'nama'=>'Rahasia',
                'Uraian'=>'Surat Internal',
            ],
        ];

        foreach ($klasifikasis as $klasifikasi) {
            DB::table('klasifikasis')->insert($klasifikasi);
        }
    }
}
