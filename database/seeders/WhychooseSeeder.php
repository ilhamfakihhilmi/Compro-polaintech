<?php

namespace Database\Seeders;

use App\Models\Whychoose;
use App\Models\whychooseDetail;
use Illuminate\Database\Seeder;

class WhychooseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $why = Whychoose::create([
            'title' => 'MENGAPA MEMILIH KAMI',
            'subtitle' => 'Beberapa Alasan Mengapa Orang Memilih Kami',
            'file' => 'file/whychoose/why.jpg',
        ]);

        $data = [
            [
                'whychoose_id' => $why->id,
                'title' => 'Tim Profesional dan Berpengalaman ',
                'description' => 'Kami memiliki tim IT yang kompeten dan berpengalaman di bidang Network Operations Service, Development Application, dan Facility Operations Service. Setiap proyek ditangani dengan presisi dan keahlian terbaik.',
            ],
            [
                'whychoose_id' => $why->id,
                'title' => 'Solusi IT yang Disesuaikan dengan Kebutuhan',
                'description' => 'Kami tidak hanya menawarkan layanan standar, tetapi juga merancang solusi IT yang disesuaikan dengan kebutuhan unik bisnis Anda. Mulai dari pengembangan aplikasi hingga manajemen jaringan, kami memastikan solusi yang efisien dan efektif.',
            ],
            [
                'whychoose_id' => $why->id,
                'title' => 'Dukungan 24/7 dan Responsif',
                'description' => 'Layanan kami didukung oleh tim support yang siap membantu 24/7. Apapun kendala atau kebutuhan Anda, kami selalu siap memberikan solusi cepat dan tepat.',
            ],
            [
                'whychoose_id' => $why->id,
                'title' => 'Harga Kompetitif dengan Kualitas Terbaik',
                'description' => 'Kami menawarkan layanan IT berkualitas tinggi dengan harga yang kompetitif. Kami percaya bahwa teknologi canggih harus dapat diakses oleh semua bisnis, tanpa mengorbankan kualitas.',
            ],
        ];

        foreach ($data as $serviceData) {
            whychooseDetail::create($serviceData);
        }
    }
}
