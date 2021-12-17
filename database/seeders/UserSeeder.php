<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->upsert([
            [
                'id' => 1,
                'name' => 'Artem',
                'surname' => 'Dariy',
                'email' => 'dariy.artiem@gmail.com',
                'password' => Hash::make('alcoNAFT228'),
                'phone' => '0957034324',
                'country' => 'Ukraine',
                'region' => 'Mykolaiv',
                'city' => 'Mykolaiv',
                'role_id' => 3
            ],
        ], 'id');
    }
}
