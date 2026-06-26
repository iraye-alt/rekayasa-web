<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {

        Artikel::truncate();

        $artikels = [
            [
                'image'       => 'mandiri1.jpg',
                'title'       => 'Transformasi Digital dalam Dunia Perbankan',
                'description' => 'Perbankan modern kini mengandalkan teknologi digital...',
                'kategori'    => 'Digital Banking',
                'status'      => 'published', 
            ],
            [
                'image'       => 'mandiri2.jpg',
                'title'       => 'Tips Mengelola Keuangan Pribadi Secara Efektif',
                'description' => 'Mengatur keuangan dengan baik adalah langkah penting...',
                'kategori'    => 'Edukasi Finansial',
                'status'      => 'published', 
            ],
            [
                'image'       => 'mandiri3.jpg',
                'title'       => 'Keamanan Transaksi Digital di Era Modern',
                'description' => 'Keamanan menjadi prioritas utama dalam setiap transaksi...',
                'kategori'    => 'Keamanan',
                'status'      => 'published',
            ],
            [
                'image'       => 'mandiri4.jpg',
                'title'       => 'Peran Bank dalam Mendukung UMKM Indonesia',
                'description' => 'Bank memiliki peran penting dalam mendukung pertumbuhan UMKM...',
                'kategori'    => 'Bisnis',
                'status'      => 'draft',
            ],
            [
                'image'       => 'mandiri5.jpg',
                'title'       => 'Inovasi Layanan Perbankan untuk Masa Depan',
                'description' => 'Inovasi terus dilakukan untuk menghadirkan layanan...',
                'kategori'    => 'Inovasi',
                'status'      => 'published',
            ],
            [
                'image'       => 'mandiri6.jpg',
                'title'       => 'Pentingnya Literasi Keuangan bagi Generasi Muda',
                'description' => 'Literasi keuangan membantu generasi muda memahami...',
                'kategori'    => 'Edukasi',
                'status'      => 'published',
            ],
        ];

        foreach ($artikels as $artikel) {
            Artikel::create($artikel);
        }
    }
}