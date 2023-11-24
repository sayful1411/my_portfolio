<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("educations")->insert([
            [
                "course" => "B.S.S in Economics",
                "institution" => "Dhamrai Govt. College",
                "duration" => "2017 - 2023",
                "description" => "In 2017 I started my graduation in economics which will end in 2023. It takes more than 2 years to complete honors due to session congestion and corona pandemic. Meanwhile, I have come a long way in web development.",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "course" => "H.S.C",
                "institution" => "Savar Govt. College",
                "duration" => "2015 - 2017",
                "description" => "I completed my higher secondary education in 2017. I have a 4.17 GPA. It was an extraordinary chapter in my life. ICT books were my weakness. This weakness started my web development career.",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
