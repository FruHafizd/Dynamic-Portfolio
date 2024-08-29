<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_pages')->insert([
            'text_content' => 'Home Page',
            'name' => 'Hello! My name is FruHafizd',
            'button_page' => 'About Me',
            'images' => 'image.png',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tenetur ullam optio odit aspernatur quae accusamus, alias placeat consectetur maxime ut illo voluptates commodi architecto ab suscipit repellat distinctio sint?',
            'is_active' => true,
        ]);
    }
}
