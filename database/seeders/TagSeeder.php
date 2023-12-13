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
            'tag_name' => '春',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => '夏',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => '秋',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => '冬',
        ]);
        
        //調理カテゴリーのタグ
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'ワンパン',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => '時短',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => '電子レンジ多用',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => '包丁いらず',
        ]);
        
        //野菜カテゴリーのタグ
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'キャベツ',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'レタス',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '白菜',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'なす',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'ピーマン',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'オクラ',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'にんじん',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '大根',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'ほうれん草',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '小松菜',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'モロヘイヤ',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'ネギ',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '玉ねぎ',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'かぼちゃ',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'じゃがいも',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '里芋',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'さつまいも',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => '長芋',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '豚こま肉',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '豚バラ肉',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '鶏むね肉',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '鶏もも肉',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'ささみ',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => 'ひき肉',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '牛肉',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 5,
            'tag_name' => 'サバ',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 5,
            'tag_name' => 'アジ',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 5,
            'tag_name' => 'サワラ',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 5,
            'tag_name' => 'シイラ',
        ]);
        
        //時間帯カテゴリーのタグ
        DB::table('tags')->insert([
            'category_id' => 6,
            'tag_name' => '朝食',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 6,
            'tag_name' => '昼食',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 6,
            'tag_name' => '夕食',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 6,
            'tag_name' => '夜食',
        ]);
        
        //調理器具カテゴリーのタグ
        DB::table('tags')->insert([
            'category_id' => 7,
            'tag_name' => 'フライパン',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 7,
            'tag_name' => '土鍋',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 7,
            'tag_name' => '中華鍋',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 7,
            'tag_name' => 'ブンブンチョッパー',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 7,
            'tag_name' => '鉄製フライパン',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 7,
            'tag_name' => '玉子焼き機',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 7,
            'tag_name' => 'オーブン',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 7,
            'tag_name' => 'トースター',
        ]);
        
    }
}
