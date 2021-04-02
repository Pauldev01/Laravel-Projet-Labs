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
                    "src"=>"img/01.jpg",
                    "texte"=>"Get your freebie template now!",
                ],                
                [
                    "src" => "img/02.jpg",
                    "texte" => "Get your'z freesbies tomplate won!",
                ] 
            ]
        );
    }
}
