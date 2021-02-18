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

        // factory(Contact::class, 50)->create()->each(function($u) {
        //     $u->number()->save(factory(Number::class)->make());
        // });
        $contact = new Contact([
                'name'=> 'Shuvo',
                'email'=>'shuvo@gmail.com',
                'number' => '01791623736',
                'password' => '654321'
            ]);
            $contact->save();
        $number  = new Number([
                'name' => 'Shuvo',
                'number' => '01791623736',
                ]);
            $contact->number()->save($number);

        // Contact::create([
        //     'name'=> 'Shuvo',
        //     'email'=>'shuvo@gmail.com',
        //     'number' => '01791623736',
        //     'password' => '654321'
        // ]);
        // Contact::create([
        //     'name'=> 'Test',
        //     'email'=>'test@gmail.com',
        //     'number' => '01303316865',
        //     'password' => '987654'
        // ]);
        // Contact::create([
        //     'name'=> 'Test2',
        //     'email'=>'test2@gmail.com',
        //     'number' => '01985264589',
        //     'password' => '123456'
        // ]);
    }
}
