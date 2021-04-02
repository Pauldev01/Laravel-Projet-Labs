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
                    'titre'=>'Get in the lab',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-011-compass',
                    'titre'=>'Projects online',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-037-idea',
                    'titre'=>'SMART MARKETING',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-039-vector',
                    'titre'=>'Social Media',
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-036-brainstorming',
                    'titre'=>'Brainstorming',
                    'description'=>'Lorem ipsgdum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-026-search',
                    'titre'=>'Documented',
                    'description'=>'Lorem ipszrum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-018-laptop-1',
                    'titre'=>'Responsive',
                    'description'=>'Lorem ipsumf dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-043-sketch',
                    'titre'=>'Retina ready',
                    'description'=>'Lorem isdpsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-012-cube',
                    'titre'=>'Ultra modern',
                    'description'=>'Lorem ipsum dolor sit amegsdgt, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-026-search',
                    'titre'=>'Retina ready',
                    'description'=>'Loremdsds ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-037-idea',
                    'titre'=>'Ultra moderne',
                    'description'=>'Loremdsds ipsum dolorsitamet, consectxcvetur adipiscing elit. Curabitur leofdfd est, feugiat nec elementum id, suscipit id nulla..',
                ],
                [
                    'icon'=>'flaticon-011-compass',
                    'titre'=>'Retinaer ready',
                    'description'=>'Loreremdsds ipsumf dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                ],
            ]
        );
    }
}
