<?php

namespace Database\Seeders;

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
        $this->call([
            PostSeeder::class,
            ColorSeeder::class,
            CollectionSeeder::class,
            MaterialSeeder::class,
        ]);
    }
}
