<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            PositionSeeder::class,
            RankGroupSeeder::class,
            RoleSeeder::class,
            UnitSeeder::class,
            UserSeeder::class,
        ]);

        //php artisan db:seed
    }
}
