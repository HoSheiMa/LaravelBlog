<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'post_id' => 1,
            'user_id' => 1,
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ultricies enim, nec auctor arcu tincidunt quis. Donec pulvinar dolor quam, sit amet efficitur quam eleifend vitae.',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'post_id' => 1,
            'user_id' => 2,
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ultricies enim, nec auctor arcu tincidunt quis. Donec pulvinar dolor quam, sit amet efficitur quam eleifend vitae.',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'post_id' => 1,
            'user_id' => 1,
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ultricies enim, nec auctor arcu tincidunt quis. Donec pulvinar dolor quam, sit amet efficitur quam eleifend vitae.',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'post_id' => 2,
            'user_id' => 1,
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ultricies enim, nec auctor arcu tincidunt quis. Donec pulvinar dolor quam, sit amet efficitur quam eleifend vitae.',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'post_id' => 2,
            'user_id' => 2,
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ultricies enim, nec auctor arcu tincidunt quis. Donec pulvinar dolor quam, sit amet efficitur quam eleifend vitae.',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'post_id' => 2,
            'user_id' => 1,
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ultricies enim, nec auctor arcu tincidunt quis. Donec pulvinar dolor quam, sit amet efficitur quam eleifend vitae.',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'post_id' => 3,
            'user_id' => 2,
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ultricies enim, nec auctor arcu tincidunt quis. Donec pulvinar dolor quam, sit amet efficitur quam eleifend vitae.',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'post_id' => 3,
            'user_id' => 1,
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ultricies enim, nec auctor arcu tincidunt quis. Donec pulvinar dolor quam, sit amet efficitur quam eleifend vitae.',
            'created_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'post_id' => 3,
            'user_id' => 2,
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ultricies enim, nec auctor arcu tincidunt quis. Donec pulvinar dolor quam, sit amet efficitur quam eleifend vitae.',
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
