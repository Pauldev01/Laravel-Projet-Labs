<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
        [
            "name" => "Mario",
            "email" => "m@m.com",
            "fonction_id" => 2,
            "password" => Hash::make("password"),
            "role_id" => 2,
            "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
            "img" => "1.jpg",
            "check" => 1
        ],
        [
            "name" => "Luigi",
            "email" => "l@l.com",
            "fonction_id" => 4,
            "password" => Hash::make("password"),
            "role_id" => 1,
            "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
            "img" => "1.jpg",
            "check" => 1
        ],
        [
            "name" => "Aran",
            "email" => "s@s.com",
            "fonction_id" => 3,
            "password" => Hash::make("password"),
            "role_id" => 3,
            "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
            "img" => "1.jpg",
            "check" => 1
        ],
        [
            "name" => "Kong",
            "email" => "d@k.com",
            "fonction_id" => 4,
            "password" => Hash::make("password"),
            "role_id" => 4,
            "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
            "img" => "1.jpg",
            "check" => 1
        ],
        [
            "name" => "Homura",
            "email" => "h@h.com",
            "fonction_id" => 4,
            "password" => Hash::make("password"),
            "role_id" => 1,
            "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
            "img" => "1.jpg",
            "check" => 0
        ],

        ]);
    }
}
