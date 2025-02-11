<?php

namespace Database\Seeders;

use App\Models\Carousel;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => 'TEKNOLOGI MASA DEPAN',
                'subtitle' => 'Mendorong Inovasi Digital',
                'file' => 'file/carousel/carousel-1.JPG',
            ],
            [
                'title' => 'EKOSISTEM DIGITAL',
                'subtitle' => 'Kolaborasi untuk Pertumbuhan',
                'file' => 'file/carousel/carousel-2.JPG',
            ],
        ];

        foreach ($datas as $data) {
            Carousel::create($data);
        }
    }
}
