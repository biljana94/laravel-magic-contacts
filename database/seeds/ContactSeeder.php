<?php

use Illuminate\Database\Seeder;
// use \App\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Contact::class, 100)->create();
    }
}
