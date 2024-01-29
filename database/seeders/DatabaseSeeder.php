<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $hakusers = [
            [ 'hakuser' => 'admin',],
            [ 'hakuser' => 'Karumkit',],
            [ 'hakuser' => 'user',],
        ];
        foreach ($hakusers as $hakuser) {
            DB::table('hakusers')->insert($hakuser);
        }

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

        $users = [
            [
                'name' => 'SuperAdmin',
            'hakuser_id'=>1,
            'email' => 'sadmin@email.com',
            'password' => Hash::make('admin123'),
            ],
            [
                'name' => 'ver',
                'hakuser_id'=>2,
                'email' => 'ver@gmail.com',
                'password' => Hash::make('admin123')
            ]
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
       
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
