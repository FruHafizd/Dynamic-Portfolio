<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_pages')->insert([
            'name' => 'Hello! My name is FruHafizd',
            'images' => 'image.png',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tenetur ullam optio odit aspernatur quae accusamus, alias placeat consectetur maxime ut illo voluptates commodi architecto ab suscipit repellat distinctio sint?',
            'button_page' => 'Contact Me',
            'is_active' => true,
        ]);
    }
}
