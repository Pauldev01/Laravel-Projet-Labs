<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_titres')->insert(
            [
                [
                    "titre"=>"GET IN THE LAB AND DISCOVER THE WORLD",
                ],
                [
                    "titre"=>"WHAT OUR CLIENTS SAY",
                ],
                [
                    "titre"=>"GET IN THE LAB AND SEE THE SERVICES",
                ],
                [
                    "titre"=>"GET IN THE LAB AND MEET THE TEAM",
                ],
                [
                    "titre"=>"Are you ready to stand out?",
                ],
            ]
        );
    }
}
