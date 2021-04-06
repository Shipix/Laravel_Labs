<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tags")->insert(
            [
                ["hashtag"=>"Design"],
                ["hashtag"=>"Tech"],
                ["hashtag"=>"Travel"],
                ["hashtag"=>"Actu"],
                ["hashtag"=>"Infos"],
                ["hashtag"=>"Science"],
                ["hashtag"=>"IA"],
                ["hashtag"=>"Blog"],
            ]
        );
    }
}
