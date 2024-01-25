<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
       
    }
}
