<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call(
            [
                HomeMainSeeder::class,
                VideoSeeder::class,
                TestimonialSeeder::class,
                LogoSeeder::class,
            ]
        );
    }
}
