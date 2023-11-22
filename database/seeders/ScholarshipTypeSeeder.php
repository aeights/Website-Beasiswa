<?php

namespace Database\Seeders;

use App\Models\ScholarshipType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScholarshipTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Beasiswa Akademik',
                'description' => 'Beasiswa akademik adalah bentuk bantuan keuangan yang diberikan kepada individu berdasarkan prestasi akademis atau pencapaian akademik tertentu. Kriteria utama pemilihan penerima beasiswa akademik umumnya melibatkan penilaian nilai akademis, seperti Indeks Prestasi Kumulatif (IPK), skor ujian, atau prestasi akademis lainnya. Beasiswa ini dirancang untuk mendukung pendidikan seseorang dan mendorong pencapaian tinggi dalam bidang studi tertentu.'
            ],
            [
                'name' => 'Beasiswa Non Akademik',
                'description' => 'Beasiswa non-akademik, di sisi lain, diberikan atas dasar faktor-faktor selain prestasi akademis. Kriteria pemilihan penerima beasiswa non-akademik dapat melibatkan aspek-aspek seperti bakat dalam seni atau olahraga, keterlibatan dalam kegiatan ekstrakurikuler, kepemimpinan, kontribusi kepada masyarakat, atau keterlibatan dalam proyek-proyek sukarela. Beasiswa non-akademik dirancang untuk mengakui dan mendukung pengembangan pribadi, keterampilan ekstrakurikuler, dan kontribusi positif individu dalam berbagai konteks di luar ruang kelas.'
            ],
        ];

        foreach ($types as $key => $value) {
            ScholarshipType::create($value);
        }
    }
}
