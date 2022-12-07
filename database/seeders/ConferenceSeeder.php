<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        (new Conference())->insert([
            [
                'title' => Lorem::sentence(3),
                'content' => Lorem::text()
            ],
            [
                'title' => Lorem::sentence(3),
                'content' => Lorem::text()
            ],
            [
                'title' => Lorem::sentence(3),
                'content' => Lorem::text()
            ]
        ]);
    }
}
