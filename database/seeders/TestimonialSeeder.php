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
                    "nom" => "Julia Chang",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "img/avatar/01.jpg",
                ],
                [
                    "nom" => "Kuni Mitsu",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "img/avatar/02.jpg",
                ],
                [
                    "nom" => "Kazuya Mishima",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "img/avatar/01.jpg",
                ],
                [
                    "nom" => "Bob hanks",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "img/avatar/02.jpg",
                ],
                [
                    "nom" => "Mika R",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "img/avatar/02.jpg",
                ],
                [
                    "nom" => "Michael Scott",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "img/avatar/01.jpg",
                ],
                [
                    "nom" => "Menat Yo",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "img/avatar/02.jpg",
                ],
                [
                    "nom" => "Yoan Yo",
                    "fonction" => "CEO Company",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "img" => "img/avatar/02.jpg",
                ],
            ]
                );
    }
}
