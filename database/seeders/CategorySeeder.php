<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => '季節タグ',
        ]);
        
        DB::table('categories')->insert([
            'category_name' => '調理タグ',
        ]);
        
        DB::table('categories')->insert([
            'category_name' => '野菜タグ',
        ]);
        
        DB::table('categories')->insert([
            'category_name' => '肉魚タグ',
        ]);
        
        DB::table('categories')->insert([
            'category_name' => '時間帯タグ',
        ]);
        
        DB::table('categories')->insert([
            'category_name' => '調理器具タグ',
        ]);
    }
}
