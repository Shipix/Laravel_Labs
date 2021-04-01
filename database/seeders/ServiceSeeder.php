<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert(
            [
                [
                    'icon'=>'flaticon-023-flask',
                    'titre'=>'1 Get in the lab',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-011-compass',
                    'titre'=>'2 Projects online',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-037-idea',
                    'titre'=>'3 SMART MARKETING',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-039-vector',
                    'titre'=>'4 Social Media',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-036-brainstorming',
                    'titre'=>'5 Brainstorming',
                    'description'=>'Lorem ipsgdum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-026-search',
                    'titre'=>'6 Documented',
                    'description'=>'Lorem ipszrum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-018-laptop-1',
                    'titre'=>'7 Responsive',
                    'description'=>'Lorem ipsumf dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-043-sketch',
                    'titre'=>'8 Retina ready',
                    'description'=>'Lorem isdpsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-012-cube',
                    'titre'=>'9 Ultra modern',
                    'description'=>'Lorem ipsum dolor sit amegsdgt, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-026-search',
                    'titre'=>'10 Retina ready',
                    'description'=>'Loremdsds ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-037-idea',
                    'titre'=>'11 Ultra moderne',
                    'description'=>'Loremdsds ipsum dolorsitamet, consectxcvetur adipiscing elit. Curabitur leofdfd est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-011-compass',
                    'titre'=>'12 Retinaer ready',
                    'description'=>'Loreremdsds ipsumf dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
            ]
        );
    }
}
