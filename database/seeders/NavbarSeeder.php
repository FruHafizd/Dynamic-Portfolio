<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('navbars')->insert([
            'navbar_one' => 'Home',
            'navbar_two' => 'About',
            'navbar_there' => 'Projects',
            'navbar_four' => 'Contacts',
        ]);
    }
}
