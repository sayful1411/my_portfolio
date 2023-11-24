<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("projects")->insert([
            [
                "name" => "Income-Expense Application",
                "description" => "This is a income expense Laravel application. Is's a single user application with role management. Also you can download report.",
                "image" => "images/khorcha.png",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Multi Authentication Application",
                "description" => "This is a multi authentication application. Anybody can register with his/her email. Also login with social media like facebook and google.",
                "image" => "images/mauth.png",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Admin Dashboard Template",
                "description" => "This is a simple admin dashboard template. It can be used in the backend.",
                "image" => "images/dashboard.png",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "One page portfolio website template",
                "description" => "This is a One page portfolio website made with HTML, CSS, and jquery.",
                "image" => "images/cuda.png",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
