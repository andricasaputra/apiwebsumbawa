<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\About\Profile::create([
            'title' => 'Profil Stasiun Karantina Pertanian Kelas I Sumbawa Besar',
            'description' => 'Stasiun Karantina Pertanian Kelas I Sumbawa Besar merupakan Unit Pelaksana Tekhnis (UPT) dari Badan Karantina Pertanian yang melaksanakan kegiatan operasional di Pulau Sumbawa dengan kegiatan utama berupa pengiriman komoditi pertanian (hewan & tumbuhan) dengan tujuan antar pulau, ekspor maupun impor.

            Pulau Sumbawa merupakan pulau terbesar di Propinsi Nusa Tenggara Barat yang memiliki luas 14.386 km2. Pulau ini dibatasi oleh Selat Alas disebelah Barat yang memisahkan dengan Pulau Lombok, Selat Sape di sebelah timur yang memisahkan dengan Pulau Komodo, Samudera Hindia di sebelah selatan, dan Laut Flores di sebelah utara. Kota terbesarnya adalah Bima yang berada dibagian timur pulau ini.

            Dengan wilayah kerjanya meliputi seluruh Pulau Sumbawa yang terdiri dari 4 (empat) Kabupaten dan 1 (satu) Kota yaitu Kabupaten Sumbawa Barat, Kabupaten Sumbawa, Kabupaten Dompu dan Kabupaten Bima, serta Kota Bima, dengan membawahi 8 Wilayah Kerja Karantina Pertanian yang tersebar dari ujung barat Pulau Sumbawa hingga ke ujung timur, yaitu Wilker Pelabuhan Ferry Poto Tano, Wilker Pelabuhan Laut Benete, Wilker Pelabuhan Laut Badas, Wilker Bandara Sultan M Kaharuddin, Wilker Pelabuhan Laut Kempo, Wilker Bandara Sultan M Salahuddin, Wilker Pelabuhan Laut Bima. Dan Wilker pelabuhan Ferry Sape.',

            'address' => 'Jln. Pelabuhan Badas No. 01 Sumbawa - Nusa Tenggara Barat

                        Kode Pos : 84351',

            'contact' => 'Telp/Fax : 0371 - 2629152

                    WA : 0813 3990 1664

                    Email : karantinasumbawa@pertanian.go.id',

            'social' => 'Website : sumbawa.karantina.pertanian.go.id

                    Facebook : Karantina Pertanian Sumbawa

                    Twitter : @SKP_Sumbawa

                    Instagram : karantinapertaniansumbawa

                    Youtube : Karantina Pertanian Sumbawa'


        ]);
    }
}
