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
        DB::table('muzeums')->insert([
            'category_id' => '1',
            'name' => '大原美術館',
            'address' => '〒710-0046 岡山県倉敷市中央１丁目１−１５',
            'tel' => '086-422-0005',
            'image' => '',
        ]);
    }
}
