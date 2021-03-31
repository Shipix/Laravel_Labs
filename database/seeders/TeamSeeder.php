<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert(
            [
                [
                   "nom"=>"Wil",
                   "prenom"=>"Sheepe",
                   "fonction"=>"CEO",
                   "img"=>"img/team/1.jpg", 
                ],
                [
                    "nom"=>"Zen",
                    "prenom"=>"Zeniths",
                    "fonction"=>"Designer",
                    "img"=>"img/team/2.jpg", 
                 ],
                 [
                    "nom"=>"Oklm",
                    "prenom"=>"Au'Calme",
                    "fonction"=>"Artiste",
                    "img"=>"img/team/3.jpg", 
                 ],
                 [
                    "nom"=>"Shiipix",
                    "prenom"=>"CHIPIX",
                    "fonction"=>"Project Asistan",
                    "img"=>"img/team/2.jpg", 
                 ],
                 [
                    "nom"=>"Willi",
                    "prenom"=>"Chris",
                    "fonction"=>"Project Manager",
                    "img"=>"img/team/3.jpg", 
                 ]

            ]
        );
    }
}
