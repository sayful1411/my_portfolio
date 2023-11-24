<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date1 = "10-03-2022";
        $date2 = "27-08-2022";
        $date3 = "15-05-2021";
        $date4 = "07-09-2020";

        $convertedDate1 = \Carbon\Carbon::createFromFormat('d-m-Y', $date1)->format('Y-m-d');
        $convertedDate2 = \Carbon\Carbon::createFromFormat('d-m-Y', $date2)->format('Y-m-d');
        $convertedDate3 = \Carbon\Carbon::createFromFormat('d-m-Y', $date3)->format('Y-m-d');
        $convertedDate4 = \Carbon\Carbon::createFromFormat('d-m-Y', $date4)->format('Y-m-d');

        DB::table("projects_info")->insert([
            [
                "project_id" => 1,
                "categories" => "PHP, Laravel",
                "date" => $convertedDate1,
                "tags" => "Web Application, Laravel",
                "website" => "https://khorcha.mdsayfulislam.com",
                "download" => "khorcha.zip",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "project_id" => 2,
                "categories" => "PHP, Laravel",
                "date" => $convertedDate2,
                "tags" => " Auth, Laravel",
                "website" => "https://mauth.mdsayfulislam.com",
                "download" => "mauth.zip",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "project_id" => 3,
                "categories" => "Html, Bootstrap",
                "date" => $convertedDate3,
                "tags" => " Design, Frontend",
                "website" => "https://dashboard-ds.netlify.app/",
                "download" => "dashboard.zip",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "project_id" => 4,
                "categories"=> "Html, Bootstrap",
                "date"=> $convertedDate4,
                "tags"=> " jQuery, Frontend",
                "website"=> "https://cuda-sayful.netlify.app/",
                "download"=> "cuda.zip",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
