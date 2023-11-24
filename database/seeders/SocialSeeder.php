<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("socials")->insert([
            "facebook" => "https://facebook.com/sayful.islam1411",
            "linkedin" => "https://www.linkedin.com/in/sayfulislam1411",
            "twitter" => "https://twitter.com/md_sayful_islam",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
