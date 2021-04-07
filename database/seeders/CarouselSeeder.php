<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->insert(
            [
                [
                    "src"=>"01.jpg",
                    "texte"=>"Get your freebie template now!",
                ],                
                [
                    "src" => "02.jpg",
                    "texte" => "Get your'z freesbies tomplate won!",
                ] 
            ]
        );
    }
}
