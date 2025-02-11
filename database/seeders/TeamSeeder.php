<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'file' => null,
            'name' => 'Farid Nabil Firdaus',
            'job' => 'Web Programmer',
            'twitter' => null,
            'instagram' => 'https://instagram.com/farid.nabil11',
            'facebook' => null,
            'linkedin' => null,
        ]);
    }
}
