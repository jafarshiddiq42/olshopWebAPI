<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HakUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
       
    }
}
