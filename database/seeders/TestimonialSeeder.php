<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert(
            [
                [
                    "nom" => "Michael Smith",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "01.jpg",
                ],
                [
                    "nom" => "Mika Shmit",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "02.jpg",
                ],
                [
                    "nom" => "Mayk Shipix",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "01.jpg",
                ],
                [
                    "nom" => "Mika Zmith's",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "02.jpg",
                ],
                [
                    "nom" => "Mika Shmit",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "02.jpg",
                ],
                [
                    "nom" => "Michael Smith",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "01.jpg",
                ],
                [
                    "nom" => "Mika Zmith's",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "02.jpg",
                ],
                [
                    "nom" => "Mika Shmit",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "02.jpg",
                ],
            ]
                );
    }
}
