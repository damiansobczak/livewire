<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert(array(
            array(
                'name' => 'Czerwony',
            ),
            array(
                'name' => 'Zielony',
            ),
            array(
                'name' => 'Niebieski',
            ),
        ));
    }
}
