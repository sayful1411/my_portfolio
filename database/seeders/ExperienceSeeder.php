<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("experiences")->insert([
            [
                "job_title" => "Laravel Developer",
                "company" => "Crystal IT",
                "duration" => "2022 - Present",
                "description" => "I have been working at Crystal IT for several years as a Laravel developer. I'm responsible for many customers. It is my responsibility to take care of several projects at the same time.",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "job_title" => "Web Development and WordPress Customization",
                "company" => "AR Soft Host",
                "duration" => "2020 - 2022",
                "description" => "Around 2020, I started working on WordPress with an elder brother. My job was to do wordpress customization. Various types of theme customizations have been done. Notable among these are newspapers, blog sites, e-commerce websites, etc.",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
