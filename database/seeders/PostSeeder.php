<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'meal_name' => '野菜マシマシ夏野菜カレー',
            'post_comment' => '玉ねぎ、豚肉、ニンジンのカレーにピーマン、ナス、カボチャを焼いてトッピングしてみました！',
            //画像データは投稿機能でレコード追加の方が良い？
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
