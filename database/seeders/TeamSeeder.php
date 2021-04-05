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
                   "fonction_id"=>1,
                   "img"=>"img/team/1.jpg", 
                ],
                [
                    "nom"=>"Zen",
                    "prenom"=>"Designer",
                    "fonction_id"=>2,
                    "img"=>"img/team/2.jpg", 
                 ],
                 [
                    "nom"=>"Oklm",
                    "prenom"=>"Au'Calme",
                    "fonction_id"=>3,
                    "img"=>"img/team/3.jpg", 
                 ],
                 [
                    "nom"=>"Shiipix",
                    "prenom"=>"CHIPIX",
                    "fonction_id"=>4,
                    "img"=>"img/team/2.jpg", 
                 ],
                 [
                    "nom"=>"Willi",
                    "prenom"=>"Chris",
                    "fonction_id"=>5,
                    "img"=>"img/team/3.jpg", 
                 ]

            ]
        );
    }
}
