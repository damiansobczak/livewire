<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collections')->insert(array(
            array(
                'name' => 'Platynowe Hity',
            ),
            array(
                'name' => 'Złote przeboje',
            ),
            array(
                'name' => 'Srebny Lis',
            ),
        ));
    }
}
