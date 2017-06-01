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
            'name' => 'Спорт',
        ]);
        DB::table('categories')->insert([
            'name' => 'Бизнес',
        ]);
        DB::table('categories')->insert([
            'name' => 'IT',
        ]);
        DB::table('categories')->insert([
            'name' => 'Погода',
        ]);
        DB::table('categories')->insert([
            'name' => 'Политика',
        ]);
    }
}
