<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => 'Test post 1',
            'slug' => 'test-post-1',
            'meta_title' => 'Test post 1 meta title',
            'meta_description' => 'Test post 1 meta description',
            'image' => 'public/assets/frontend/uploads/posts/default_post_image.jpg',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ultricies enim, nec auctor arcu tincidunt quis. Donec pulvinar dolor quam, sit amet efficitur quam eleifend vitae. Mauris ultrices lorem at sodales eleifend. Donec id neque dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer posuere placerat tellus eget posuere. Nam quis eleifend velit. Donec faucibus tempor est quis consectetur. Donec quis nisl lorem. Nulla vehicula eleifend augue a interdum.',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => 'Test post 2',
            'slug' => 'test-post-2',
            'meta_title' => 'Test post 2 meta title',
            'meta_description' => 'Test post 2 meta description',
            'image' => 'public/assets/frontend/uploads/posts/default_post_image.jpg',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ultricies enim, nec auctor arcu tincidunt quis. Donec pulvinar dolor quam, sit amet efficitur quam eleifend vitae. Mauris ultrices lorem at sodales eleifend. Donec id neque dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer posuere placerat tellus eget posuere. Nam quis eleifend velit. Donec faucibus tempor est quis consectetur. Donec quis nisl lorem. Nulla vehicula eleifend augue a interdum.',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => 'Test post 3',
            'slug' => 'test-post-3',
            'meta_title' => 'Test post 3 meta title',
            'meta_description' => 'Test post 3 meta description',
            'image' => 'public/assets/frontend/uploads/posts/default_post_image.jpg',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ultricies enim, nec auctor arcu tincidunt quis. Donec pulvinar dolor quam, sit amet efficitur quam eleifend vitae. Mauris ultrices lorem at sodales eleifend. Donec id neque dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer posuere placerat tellus eget posuere. Nam quis eleifend velit. Donec faucibus tempor est quis consectetur. Donec quis nisl lorem. Nulla vehicula eleifend augue a interdum.',
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
