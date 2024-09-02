<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectPage extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project_pages')->insert([
            'images' => 'awdjaw.png',
            'name_project' => 'WEBSITE',
            'decsription_project' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit eligendi dolorem eveniet expedita debitis? Dicta rerum dolorum rem! Consectetur praesentium laudantium impedit tempore dolor totam quidem suscipit maxime. Maiores, veritatis.',
            'is_active' => true,
        ]);
    }
}
