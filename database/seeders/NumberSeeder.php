<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Number;
use App\Models\Contact;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('numbers')->insert([
        //     'name' => 'Shuvo',
        //     'number' => '01791623736',
        //     'userId' => 1
        // ]);

        // $number  = new Number([
        //     'name' => 'Shuvo',
        //     'number' => '01791623736',
        //     ]);
        // $contact = Contact::find(1);
        // $contact->number()->save($number);
        // Number::create(
        //     [
        //     'name' => 'Shuvo',
        //     'number' => '01791623736',
        //     'userId' => 1
        //     ]);
        // Number::create([
        //     'name' => 'Superman',
        //     'number' => '01303316865',
        //     'userId' => 2
        // ]);
        // Number::create([
        //     'name' => 'Rezaul Karim',
        //     'number' => '01713467045',
        //     'userId' => 1
        // ]);
    }
}
