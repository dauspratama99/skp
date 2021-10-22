<?php

use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
        [
            'id' => '1',
            'parent_id' => null,
            'name' => 'Rektor'
       
         ] ,
         [
            'id' => '2',
            'parent_id' => '1',
            'name' => 'WR 1',
        ],
        [
            'id' => '3',
            'parent_id' => '1',
            'name' => 'WR 2',
        ],
        [
            'id' => '4',
            'parent_id' => '1',
            'name' => 'WR 3',
        ],
        [
            'id' => '5',
            'parent_id' => '2',
            'name' => 'Dekan',
        ],
        [
            'id' => '6',
            'parent_id' => '5',
            'name' => 'Ketua Jurusan',
        ],
        [
            
            'id' => '7',
            'parent_id' => '6',
            'name' => 'Dosen ',

        ]
        ]);
        
    }
}
