<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'id' => 1,
                'location' => 'Malang',
                'name' => 'Kerja Bakti',
            ],
            [
                'id' => 2,
                'location' => 'Banjarmasin',
                'name' => 'Lomba Melukis',
            ],
            [
                'id' => 3,
                'location' => 'Medan',
                'name' => 'Rapat Tahunan',
            ],
        ]);
    }
}
