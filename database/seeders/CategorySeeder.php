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
            'category_name' => '春',
        ]);
        
        DB::table('categories')->insert([
            'category_name' => '夏',
        ]);
        
        DB::table('categories')->insert([
            'category_name' => '秋',
        ]);
        
        DB::table('categories')->insert([
            'category_name' => '冬',
        ]);
        
        DB::table('categories')->insert([
            'category_name' => 'オールシーズン',
        ]);
        
        DB::table('categories')->insert([
            'category_name' => '調理器具',
        ]);
        
        DB::table('categories')->insert([
            'category_name' => '時間帯',
        ]);
        
        DB::table('categories')->insert([
            'category_name' => 'その他',
        ]);
    }
}
