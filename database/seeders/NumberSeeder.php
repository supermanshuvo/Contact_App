<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('numbers')->insert(
            [
            'name' => 'Shuvo',
            'number' => '01791623736',
            ],
            [
                'name' => 'Superman',
                'number' => '01303316865'
            ],
            [
                'name' => 'Rezaul Karim',
                'number' => '01713467045'
            ]
        );
    }
}
