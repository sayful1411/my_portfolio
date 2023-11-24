<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("abouts")->insert([
            "title" => "Better development, better experience",
            "description" => "Combine your interest in Laravel with your skills in development and user experience to create a unique business idea",
            "bio" => "I am a qualified and professional Laravel developer with two years of experience in back-end development. Strong creative and analytical skills. Interested in growing and developing skills by working with a team.",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
