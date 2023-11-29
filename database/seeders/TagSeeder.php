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
        DB::table('tags')->insert([
            'category_id' => 1,
            'tag_name' => '春',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 2,
            'tag_name' => 'ワンパン',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 3,
            'tag_name' => 'キャベツ',
        ]);
        
        DB::table('tags')->insert([
            'category_id' => 4,
            'tag_name' => '豚肉',
        ]);
    }
}
