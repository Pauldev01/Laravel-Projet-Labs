<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call(
            [
                RolesSeeder::class,
                FonctionSeeder::class,
                UserSeeder::class,

                HomeMainSeeder::class,
                VideoSeeder::class,
                TestimonialSeeder::class,
                LogoSeeder::class,
                ServiceSeeder::class,
                ContactSeeder::class,
                HomeTitreSeeder::class,
                CarouselSeeder::class,
                TeamSeeder::class,
                NewsletterSeeder::class,
                MapSeeder::class,

                //blog
                PostSeeder::class,
                CategorySeeder::class,

            ]
        );
    }
}
