<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'post_id' => 2,
            'user_id' => 1,
            'body' => 'Первый коментарий',
        ]);
        DB::table('comments')->insert([
            'post_id' => 4,
            'user_id' => 1,
            'body' => 'Второй коментарий',
        ]);
        DB::table('comments')->insert([
            'post_id' => 1,
            'user_id' => 1,
            'body' => 'Еще коментарий',
        ]);
        DB::table('comments')->insert([
            'post_id' => 3,
            'user_id' => 1,
            'body' => 'И еще коментарий',
        ]);
    }
}
