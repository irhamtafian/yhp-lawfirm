<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ArticleSeeder::class,
            CommentSeeder::class,
            MailSeeder::class,
            AboutUsSeeder::class,
            HomeSeeder::class,
            ServiceSeeder::class,
            PartnerSeeder::class,
            OurClientSeeder::class,
            ContactSeeder::class,
        ]);
    }
}