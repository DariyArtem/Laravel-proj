<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->upsert([
            [
                'id' => 1,
                'name' => 'Solo Travel',
            ],
            [
                'id' => 2,
                'name' => 'Mount Travel',

            ],
            [
                'id' => 3,
                'name' => 'Jungle Travel',

            ],
            [
                'id' => 4,
                'name' => 'Road Travel',

            ],
            [
                'id' => 5,
                'name' => 'Ocean Travel',

            ],
            [
                'id' => 6,
                'name' => 'Old City Travel',

            ],
        ], 'id');
    }
}
