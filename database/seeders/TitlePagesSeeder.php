<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitlePagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('title_pages')->insert([
            'about_page_header' => 'About Me',
            'about_page_above' => 'My Skills',
            'project_page_header' => 'My Projects',
            'contact_page_header' => 'Contact Me',
        ]);
    }
}
