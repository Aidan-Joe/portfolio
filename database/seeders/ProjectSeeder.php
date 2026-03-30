<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project; // JANGAN LUPA IMPORT INI

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'MoodBrew - AI Coffee Shop',
            'description' => 'Platform web inovatif yang mengintegrasikan kecerdasan buatan (AI) untuk mempersonalisasi pengalaman pelanggan. Fitur utama mencakup sistem rekomendasi menu cerdas yang menyarankan minuman berdasarkan suasana hati (mood) pengguna saat itu. Dibangun dengan fokus pada antarmuka pengguna yang modern dan integrasi backend yang efisien untuk memproses logika AI.',
            'image' => 'moodbrew.jpg',
            'tech_stack' => 'Laravel, AI Integration, MySQL, Tailwind CSS',
            'github_link' => 'https://github.com/TonAhmad/MoodBrew'
        ]);

        // Project 2: Clinic Management App
        Project::create([
            'title' => 'Klinik Lira Medika (Clinic App)',
            'description' => 'Aplikasi manajemen fasilitas kesehatan yang komprehensif dengan implementasi Role-Based Access Control (RBAC). Sistem ini memfasilitasi alur kerja medis mulai dari pendaftaran pasien secara mandiri, manajemen rekam medis digital bagi dokter, hingga kontrol data penuh bagi administrator. Dirancang untuk meningkatkan efisiensi operasional klinik dan akurasi data medis.',
            'image' => 'clinic.jpg',
            'tech_stack' => 'CodeIgniter 4, Tailwind CSS, PHP, MySQL',
            'github_link' => 'https://github.com/Aidan-Joe/clinic-app'
        ]);

        // Project 3: British Museum Web Clone
        Project::create([
            'title' => 'British Museum Web Clone',
            'description' => 'Sebuah proyek replika tingkat lanjut yang berfokus pada kemiripan visual dan fungsionalitas website British Museum. Proyek ini menekankan pada penataan tata letak yang kompleks, manajemen aset visual yang besar, dan penggunaan Docker untuk memastikan konsistensi lingkungan pengembangan serta kemudahan deployment. Menampilkan koleksi digital dengan navigasi yang responsif dan estetika yang bersih.',
            'image' => 'museum.jpg',
            'tech_stack' => 'Native PHP, HTML, Bootstrap, CSS, Docker',
            'github_link' => 'https://github.com/Aidan-Joe/museum-website'
        ]);
    }
}
