<?php

use Illuminate\Database\Seeder;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('categories')->insert([
            'name' => '美術',
            'description' => '大原美術館など有名な美術館などが多数あります。',
            'name_en' => 'art',
        ]);

        DB::table('categories')->insert([
            'name' => '歴史',
            'description' => '大原美術館など有名な美術館などが多数あります。',
            'name_en' => 'history',
        ]);

        DB::table('categories')->insert([
            'name' => '自然',
            'description' => '大原美術館など有名な美術館などが多数あります。',
            'name_en' => 'nature',
        ]);

        DB::table('categories')->insert([
            'name' => '科学',
            'description' => '大原美術館など有名な美術館などが多数あります。',
            'name_en' => 'science',
        ]);
    }
}
