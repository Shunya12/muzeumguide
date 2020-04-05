<?php

use Illuminate\Database\Seeder;

class MuzeumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\\Muzeum::class, 100)->create();
    }
}
