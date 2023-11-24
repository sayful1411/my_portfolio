<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactMeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("contact_me")->insert([
            "email" => "contact@mdsayfulislam.com",
            "address" => "357/A Kaliakair Savar, Dhaka 1216",
            "phone" => "+8801977978827",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
