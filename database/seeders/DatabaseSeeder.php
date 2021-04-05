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
                CategorieSeeder::class,
                FonctionSeeder::class,
                JobSeeder::class,
                VideoSeeder::class,
                TestimonialSeeder::class,
                LogoSeeder::class,
                ServiceSeeder::class,
                ContactSeeder::class,
                HomeTitreSeeder::class,
                CarouselSeeder::class,
                TeamSeeder::class,
                NewsletterSeeder::class,
                FooterSeeder::class,
                ArticleSeeder::class,
                BlogPostSeeder::class,
                BlogSeeder::class,
            ]
        );
    }
}
