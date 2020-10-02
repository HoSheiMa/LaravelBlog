<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Carbon\Carbon;

class Category_postTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_post')->insert([
            'post_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('category_post')->insert([
            'post_id' => 2,
            'category_id' => 2,
        ]);

        DB::table('category_post')->insert([
            'post_id' => 3,
            'category_id' => 2,
        ]);
    }
}
