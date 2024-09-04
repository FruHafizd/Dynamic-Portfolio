<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            HomePageSeeder::class,
            AboutPageSeeder::class,
            SkillSeeder::class,
            ProjectPage::class,
            ContactPageSeeder::class,
            TitlePagesSeeder::class,
            NavbarSeeder::class,
        ]);

    }
}
