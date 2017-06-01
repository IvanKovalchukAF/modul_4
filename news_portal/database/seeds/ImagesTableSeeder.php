<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'post_id' => 2,
            'path_image' => '/images/test1.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 25,
            'path_image' => '/images/test11.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 4,
            'path_image' => '/images/test2.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 14,
            'path_image' => '/images/test3.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 6,
            'path_image' => '/images/test4.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 19,
            'path_image' => '/images/test2.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 18,
            'path_image' => '/images/test4.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 17,
            'path_image' => '/images/test5.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 6,
            'path_image' => '/images/test2.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 16,
            'path_image' => '/images/test4.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 15,
            'path_image' => '/images/test3.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 14,
            'path_image' => '/images/test5.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 13,
            'path_image' => '/images/test2.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 12,
            'path_image' => '/images/test5.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 11,
            'path_image' => '/images/test5.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 9,
            'path_image' => '/images/test3.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 8,
            'path_image' => '/images/test1.jpg',
        ]);
        DB::table('images')->insert([
            'post_id' => 7,
            'path_image' => '/images/test4.jpg',
        ]);
    }
}
