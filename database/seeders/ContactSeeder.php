<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert(
            [
                [
                    'titre'=>'Contact us',
                    'texte'=>'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
                    'titre_info'=>'Main Office',
                    'ville'=>'C/ Libertad, 34 ',
                    'adresse'=>'05200 Arévalo ',
                    'tel'=>'0034 37483 2445 322',
                    'mail'=>'hello@company.com',
                ]
            ]
        );
    }
}
