<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IntroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("intro")->insert([
            "greeting" => "Hey There 👋 I am",
            "name" => "Md Sayful Islam",
            "profession" => "Laravel Developer",
            "description" => "Building web applications using the Laravel framework is one of your specialties",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
