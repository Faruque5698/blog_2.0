<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['user_id'=>1, 'title'=>'title-1','content'=>'content_1'],
            ['user_id'=>2, 'title'=>'title-2','content'=>'content_2'],
            ['user_id'=>1, 'title'=>'title-3','content'=>'content_3'],
            ['user_id'=>2, 'title'=>'title-4','content'=>'content_4'],
            ['user_id'=>2, 'title'=>'title-5','content'=>'content_5'],
        ]);
    }
}
