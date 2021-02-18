<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Number;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Number::create(
            [
            'name' => 'Shuvo',
            'number' => '01791623736',
            'userId' => 1
            ]);
        Number::create([
            'name' => 'Superman',
            'number' => '01303316865',
            'userId' => 2
        ]);
        Number::create([
            'name' => 'Rezaul Karim',
            'number' => '01713467045',
            'userId' => 1
        ]);
    }
}
