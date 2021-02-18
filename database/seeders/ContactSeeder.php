<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name'=> 'Shuvo',
            'email'=>'shuvo@gmail.com',
            'number' => '01791623736',
            'password' => '654321'
        ]);
        Contact::create([
            'name'=> 'Test',
            'email'=>'test@gmail.com',
            'number' => '01303316865',
            'password' => '987654'
        ]);
        Contact::create([
            'name'=> 'Test2',
            'email'=>'test2@gmail.com',
            'number' => '01985264589',
            'password' => '123456'
        ]);
    }
}
