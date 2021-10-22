<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'nip' => '1234512345',
            'name' => 'Admin Test',
            'unit_id' => 1,
            'position_id' => 1,
            'rank_id'=> 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role_id' => 1,
            'remember_token' => Str::random(30),
        ],
        [
            'nip' => '11111222233',
            'name' => 'Dekan FTI',
            'unit_id' => 2,
            'position_id' => 5,
            'rank_id'=> 7,
            'email' => 'dekanfti@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => 2,
            'remember_token' => Str::random(30),
        ],
        [
            'nip' => '1112111211',
            'name' => 'Dekan Hukum',
            'unit_id' => 3,
            'position_id' => 5,
            'rank_id'=> 7,
            'email' => 'dekanhkm@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => 2,
            'remember_token' => Str::random(30),
        ],
        [
            'nip' => '2222333345',
            'name' => 'Kajur SI',
            'unit_id' => 5,
            'position_id' => 6,
            'rank_id'=> 7,
            'email' => 'kajursi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => 2,
            'remember_token' => Str::random(30),
        ],
        [
            'nip' => '4444555533',
            'name' => 'Kajur SK',
            'unit_id' => 6,
            'position_id' => 6,
            'rank_id'=> 7,
            'email' => 'kajursk@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => 2,
            'remember_token' => Str::random(30),
        ],
        [
            'nip' => '2222333344',
            'name' => 'Kajur Hukum Perdata',
            'unit_id' => 7,
            'position_id' => 6,
            'rank_id'=> 7,
            'email' => 'kajurhkp@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => 2,
            'remember_token' => Str::random(30),
        ],
        [
            'nip' => '3332222444',
            'name' => 'Kajur Hukum Perdana',
            'unit_id' => 8,
            'position_id' => 6,
            'rank_id'=> 7,
            'email' => 'kajurhkmn@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => 2,
            'remember_token' => Str::random(30),
        ],
        [
            'nip' => '8888899999',
            'name' => 'Dosen SI',
            'unit_id' => 5,
            'position_id' => 7,
            'rank_id'=> 1,
            'email' => 'dosensi@gmail.com',
            'password' => bcrypt('1234567'),
            'role_id' => 2,
            'remember_token' => Str::random(30),
        ]
        ]);
    }
}