<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            [
                'id' => '1',
                'parent_id' => null,
                'name' => 'Unand',
            ],
            [
                'id' => '2',
                'parent_id' => 1,
                'name' => 'FTI',
            ],
            [
                'id' => '3',
                'parent_id' => 1,
                'name' => 'Hukum',
            ],
            [
                'id' => '4',
                'parent_id' => 1,
                'name' => 'Teknik',
            ],
            [

                'id' => '5',
                'parent_id' => 2,
                'name' => 'SI',
            ],
            [
                'id' => '6',
                'parent_id' => 2,
                'name' => 'SK',
            ],
            [
                'id' => '7',
                'parent_id' => 3,
                'name' => 'Hukum Perdata',
            ],
            [
                'id' => '8',
                'parent_id' => 3,
                'name' => 'Hukum Perdana',
            ],
            [
                'id' => '9',
                'parent_id' => 4,
                'name' => 'Teknik Lingkungan',
            ],
            [
                'id' => '10',
                'parent_id' => 4,
                'name' => 'Teknik Industri',
            ],
            [
                'id' => '11',
                'parent_id' => 4,
                'name' => 'Teknik Sipil',
            ],
            [
                'id' => '12',
                'parent_id' => 4,
                'name' => 'Teknik Mesin',
            ],
            [
                'id' => '13',
                'parent_id' => 4,
                'name' => 'Teknik Elektro',
            ]
        ]);
    }
}
