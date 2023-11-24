<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AboutSeeder::class,
            ContactMeSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            IntroSeeder::class,
            ProjectSeeder::class,
            ProjectInfoSeeder::class,
            SocialSeeder::class
        ]);

    }
}
