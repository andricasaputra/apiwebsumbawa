<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SPP\{AlurPelayanan, DasarHukum, InfoPelayananPengaduan, JamPelayanan, MaklumatPelayanan, ProdukPelayanan, StandarWaktu};

class SPPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlurPelayanan::insert([
            'title' => 'Bagan Alur Layanan',
            'image' => 'baganalurlayanan.png',
            'type' => \App\Models\SPP\AlurPelayanan::class,
            'created_at' => now()
        ]);

        DasarHukum::insert([
            'title' => 'Dasar Hukum',
            'image' => 'dasarhukum.png',
            'type' => \App\Models\SPP\DasarHukum::class,
            'created_at' => now()
        ]);

        InfoPelayananPengaduan::insert([
            'title' => 'Informasi Layanan & Pengaduan',
            'image' => 'informasi_pengaduan.png',
            'type' => \App\Models\SPP\InfoPelayananPengaduan::class,
            'created_at' => now()
        ]);

        JamPelayanan::insert([
            'title' => 'Jam Pelayanan',
            'image' => 'ppid/waktu_layanan_informasi.png',
            'type' => \App\Models\SPP\JamPelayanan::class,
            'created_at' => now()
        ]);

        MaklumatPelayanan::insert([
            'title' => 'Maklumat Pelayanan',
            'image' => 'maklumat.png',
            'type' => \App\Models\SPP\MaklumatPelayanan::class,
            'created_at' => now()
        ]);

        ProdukPelayanan::insert([
            'title' => 'Produk Pelayanan',
            'image' => 'produk_pelayanan.png',
            'type' => \App\Models\SPP\ProdukPelayanan::class,
            'created_at' => now()
        ]);

        StandarWaktu::insert([
            'title' => 'Standar Waktu Pelyanan',
            'image' => 'produk_pelayanan.png',
            'type' => \App\Models\SPP\StandarWaktu::class,
            'created_at' => now()
        ]);
    }
}
