<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            "created_at" => Carbon::now(),
            "user_id" => "2",
            "writer_name" => "Lars",
            "review_text" => "Vriendelijk",
            "thumbs" => "/img/up.png",
        ]);

        DB::table('reviews')->insert([
            "created_at" => Carbon::now(),
            "user_id" => "3",
            "writer_name" => "Lisa",
            "review_text" => "Goed aanbod",
            "thumbs" => "/img/up.png",
        ]);
    }
}
