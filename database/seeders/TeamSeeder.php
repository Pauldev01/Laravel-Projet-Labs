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
                   "nom"=>"Williams",
                   "prenom"=>"Nina",
                   "fonction"=>"CEO",
                   "img"=>"img/team/1.jpg", 
                ],
                [
                    "nom"=>"Julia",
                    "prenom"=>"Chang",
                    "fonction"=>"Designer",
                    "img"=>"img/team/2.jpg", 
                 ],
                 [
                    "nom"=>"Mishima",
                    "prenom"=>"Heiachi",
                    "fonction"=>"Artiste",
                    "img"=>"img/team/3.jpg", 
                 ],
                 [
                    "nom"=>"Yo",
                    "prenom"=>"Shimitsu",
                    "fonction"=>"Project Asistan",
                    "img"=>"img/team/2.jpg", 
                 ],
                 [
                    "nom"=>"Fuey",
                    "prenom"=>"Bryan",
                    "fonction"=>"Project Manager",
                    "img"=>"img/team/3.jpg", 
                 ]

            ]
        );
    }
}
