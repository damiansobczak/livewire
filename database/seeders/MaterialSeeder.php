<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert(array(
            array(
                'name' => 'Light Red',
                'color_id' => 1,
                'collection_id' => 1,
            ),
            array(
                'name' => 'Grass Green',
                'color_id' => 2,
                'collection_id' => 1,
            ),
            array(
                'name' => 'Sky Blue',
                'color_id' => 3,
                'collection_id' => 1,
            ),
            array(
                'name' => 'Night Sky Blue',
                'color_id' => 3,
                'collection_id' => 2
            ),
        ));
    }
}
