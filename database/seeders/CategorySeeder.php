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
                'img_path' => 'img/categories/category1.png',
            ],
            [
                'id' => 2,
                'name' => 'Mount Travel',
                'img_path' => 'img/categories/category2.png',
            ],
            [
                'id' => 3,
                'name' => 'Jungle Travel',
                'img_path' => 'img/categories/category3.png',
            ],
            [
                'id' => 4,
                'name' => 'Road Travel',
                'img_path' => 'img/categories/category4.png',
            ],
            [
                'id' => 5,
                'name' => 'Ocean Travel',
                'img_path' => 'img/categories/category5.png',
            ],
            [
                'id' => 6,
                'name' => 'Old City Travel',
                'img_path' => 'img/categories/category6.png',
            ],
        ], 'id');
    }
}
