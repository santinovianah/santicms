<?php

use Illuminate\Database\Seeder;

class infoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kuisinfo')->insert([
            [
            'title' => 'Bromo',
            'content' => 'Gunung Bromo adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.',
            'created_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
            'title'=>'Bhakti Alam',
            'content'=>'Bhakti Alam merupakan agrowisata yang menawarkan keindahan alam pegunungan dengan perkebunan buah, bunga bunga dan tanaman yang luas. Tempatnya sangat luas, karena dibangun di tanah seluas 300ha, di dalamnya terdapat taman bunga, taman air "IMUT", tanaman buah buahan, restoran dan juga penginapan .',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Taman Dayu',
                'content'=>'The Taman Dayu adalah kawasan hunian, resort wisata, dan pusat bisnis yang terletak di Kecamatan Pandaan, Kabupaten Pasuruan, Jawa Timur. Mengusung konsep hunian yang memanjakan penghuninya dengan menyatukan suasana alam dan gaya hidup modern.',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        	
        ]);
    }
}
