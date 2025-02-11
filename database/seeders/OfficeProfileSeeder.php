<?php

namespace Database\Seeders;

use App\Models\OfficeProfile;
use Illuminate\Database\Seeder;

class OfficeProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OfficeProfile::create([
            'name' => 'Gen Z Company',
            'email' => 'genzcompany23@gmail.com',
            'telepon' => '(0264) 88305518',
            'alamat' => 'Jl. Pramuka, Purwakarta, Indonesia',
            'whatsapp' => null,
            'instagram' => null,
            'facebook' => null,
            'linkedin' => null,
            'youtube' => null,
            'maps' => 'https://goo.gl/maps/TSFRY1FHQkHWhtoK9',
            'logo' => 'file/profilePT/nyn.png',
            'about' => 'Gen Z Company adalah sebuah perusahaan yang bergerak dibidang Waste (LB3) management mulai dari penyewaan alat berat dll',
            'clients' => '0',
            'projects' => '0',
            'awards' => '0',
        ]);
    }
}
