<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //季節カテゴリーのタグ
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'かぼちゃ',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => '大根',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'トマト',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'にんじん',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'タケノコ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => '玉ねぎ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'ピーマン',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'ジャガイモ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'キャベツ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'きゅうり',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'レタス',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'ごぼう',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'レンコン',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => '長ネギ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => '新玉ねぎ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'アスパラガス',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'かぶ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => '長いも',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'そら豆',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'スナップエンドウ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'クレソン',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'セロリ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'さやえんどう',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => '菜の花',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'イチゴ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => 'グレープフルーツ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => '鯛',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'かぼちゃ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'トマト',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'にんじん',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'トウモロコシ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'ゴーヤ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'ナス',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => '玉ねぎ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'ピーマン',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'ジャガイモ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'ズッキーニ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'きゅうり',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'レタス',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'ロメインレタス',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'アスパラガス',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'いんげん',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'そら豆',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'スナップエンドウ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'セロリ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'さやえんどう',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'オクラ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'ブルーベリー',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'マンゴー',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => '桃',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'ラズベリー',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'イチジク',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'ブドウ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => '洋ナシ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'タコ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'かつお',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '大根',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '里芋',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'ほうれん草',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'にんじん',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'ナス',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '玉ねぎ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'ピーマン',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'ジャガイモ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'きゅうり',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'ごぼう',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'レンコン',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '長ネギ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'しいたけ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'ブナシメジ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '舞茸',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'かぶ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '長いも',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'サツマイモ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'チンゲン菜',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'セロリ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'オクラ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '春菊',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'リンゴ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '鮭',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'タコ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'かつお',
        ]);
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'えび',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '白菜',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '大根',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'ブロッコリー',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'ほうれん草',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'にんじん',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '玉ねぎ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'ジャガイモ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'キャベツ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '小松菜',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'レンコン',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '水菜',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '長ネギ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'かぶ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '長いも',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'セロリ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '春菊',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '菜の花',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'オレンジ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'レモン',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'タコ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'えび',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'たら',
        ]);
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '鯛',
        ]);
        DB::table('tags')->insert([
            'category_id' => 5,
            'tag_name' => 'もやし',
        ]);
        DB::table('tags')->insert([
            'category_id' => 5,
            'tag_name' => '豆苗',
        ]);
        DB::table('tags')->insert([
            'category_id' => 5,
            'tag_name' => 'エリンギ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 5,
            'tag_name' => '青じそ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 5,
            'tag_name' => '豚肉',
        ]);
        DB::table('tags')->insert([
            'category_id' => 5,
            'tag_name' => '鶏肉',
        ]);
        DB::table('tags')->insert([
            'category_id' => 5,
            'tag_name' => '牛肉',
        ]);
        DB::table('tags')->insert([
            'category_id' => 5,
            'tag_name' => 'ひき肉',
        ]);
        DB::table('tags')->insert([
            'category_id' => 5,
            'tag_name' => '卵',
        ]);
        DB::table('tags')->insert([
            'category_id' => 6,
            'tag_name' => 'フライパン',
        ]);
        DB::table('tags')->insert([
            'category_id' => 6,
            'tag_name' => '電子レンジ',
        ]);
        DB::table('tags')->insert([
            'category_id' => 6,
            'tag_name' => '土鍋',
        ]);
        DB::table('tags')->insert([
            'category_id' => 6,
            'tag_name' => 'オーブン',
        ]);
        DB::table('tags')->insert([
            'category_id' => 7,
            'tag_name' => '朝食',
        ]);
        DB::table('tags')->insert([
            'category_id' => 7,
            'tag_name' => '昼食',
        ]);
        DB::table('tags')->insert([
            'category_id' => 7,
            'tag_name' => '夕食',
        ]);
        DB::table('tags')->insert([
            'category_id' => 7,
            'tag_name' => '夜食',
        ]);
        
    }
}
