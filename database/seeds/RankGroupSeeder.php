<?php

use Illuminate\Database\Seeder;

class RankGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rank_groups')->insert([
        [
            'id' => '1',
            'name' => 'Penata Muda',
            'group' => 'Gol. III/a',
        ] ,
        [
            'id' => '2',
            'name' => 'Penata Muda Tk. I',
            'group' => 'Gol. III/b',
        ] ,
        [ 
            'id' => '3',
            'name' => 'Penata',
            'group' => 'Gol. III/c',
        ] ,
        [ 
            'id' => '4',
            'name' => 'Penata Tk. I',
            'group' => 'Gol. III/d',
        ] ,
        [ 
            'id' => '5',
            'name' => 'Penata Tk. I',
            'group' => 'Gol. IV/a',
        ] ,
        [ 
            'id' => '6',
            'name' => 'Pembina',
            'group' => 'Gol. IV/b',
        ] ,
        [   
             'id' => '7',
            'name' => 'Pembina Tk. I',
            'group' => 'Gol. IV/a',
        ] ,
        [ 
            'id' => '8',
            'name' => 'Pembina Utama Muda',
            'group' => 'Gol. IV/b',
        ] ,
        [ 
            'id' => '9',
            'name' => 'Pembina Utama Madya',
            'group' => 'Gol. IV/c',
        ] ,
        [ 
            'id' => '10',
            'name' => 'Pembina Utama',
            'group' => 'Gol. IV/d',
        ]
        ]);
    }
}
