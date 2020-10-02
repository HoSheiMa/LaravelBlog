<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'SEO Tutorials',
            'slug' => 'seo-tutorials',
            'meta_title' => 'SEO Tutorials meta title',
            'meta_description' => 'SEO Tutorials meta description',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Facebook Tutorials',
            'slug' => 'facebook-tutorials',
            'meta_title' => 'Facebook Tutorials meta title',
            'meta_description' => 'Facebook Tutorials meta description',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Adwords Tutorials',
            'slug' => 'adwords-tutorials',
            'meta_title' => 'Adwords Tutorials meta title',
            'meta_description' => 'Adwords Tutorials meta description',
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
