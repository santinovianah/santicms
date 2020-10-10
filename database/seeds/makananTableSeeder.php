<?php

use Illuminate\Database\Seeder;

class makananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kuismakanan')->insert([
            [
            'title' => 'Rawon',
            'content' => 'Rawon adalah masakan Indonesia berupa sup daging berkuah hitam dengan campuran bumbu khas yang menggunakan kluwek. Rawon, meskipun dikenal sebagai masakan khas Jawa Timur (daerah Arekan), dikenal pula oleh masyarakat Jawa Tengah sebelah timur (daerah Surakarta).
            Daging untuk rawon umumnya adalah daging sapi yang dipotong kecil-kecil, utamanya adalah bagian sandung lamur. Bumbu supnya sangat khas Indonesia, yaitu campuran bawang merah, bawang putih, lengkuas (laos), ketumbar, kemiri, serai, kunir, cabai, kluwek, garam, serta minyak nabati. Semua bahan ini dihaluskan, lalu ditumis sampai harum. Campuran bumbu ini kemudian dimasukkan dalam kaldu rebusan daging bersama-sama dengan daging. Warna gelap khas rawon berasal dari kluwek. Di luar negeri, rawon disebut sebagai black soup.
            Rawon disajikan bersama nasi, dilengkapi dengan tauge berekor pendek, telur asin, daun bawang, kerupuk udang, daging sapi goreng (empal), dan sambal.
            Warung rawon yang cukup populer di antaranya adalah Rawon Nguling di Pasuruan [1], Rawon Kalkulator di Taman Bungkul, Surabaya[2], dan Rawon Setan di jalan Embong Malang, Surabaya[3].',
            'featured_image'=>'https://www.masakapahariini.com/wp-content/uploads/2018/04/resep-rawon-daging-780x440.jpg',
            'created_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
            'title'=>'Klepon',
            'content'=>'Klepon atau kelepon adalah sejenis makanan tradisional atau kue tradisional Indonesia yang termasuk ke dalam kelompok jajanan pasar. Makanan enak ini terbuat dari tepung beras ketan yang dibentuk seperti bola-bola kecil dan diisi dengan gula merah lalu direbus dalam air mendidih. Klepon yang sudah masak lalu digelindingkan di atas parutan kelapa agar melekat, sehingga klepon tampak berbalur parutan kelapa. Biasanya klepon diletakkan di dalam wadah yang terbuat dari daun pisang.',
            'featured_image'=>'https://blog.tokowahab.com/wp-content/uploads/2017/03/DSC00793-1024x682.jpg',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Lontong Kupang',
                'content'=>'Lontong kupang atau kupang lontong adalah nama makanan khas daerah Jawa Timur. Makanan ini terkenal khususnya di daerah Arekan Jawa Timur. Di daerah pesisir timur Jawa Timur, lontong kupang yang terkenal adalah Kupang Keraton. Nama Keraton ini diambil dari suatu nama daerah atau suatu nama kecamatan di Kabupaten Pasuruan. Sudah sejak lama penduduk daerah ini mencari dan berdagang kerang kupang. baik dijual mentah ataupun berupa kuliner ( lontong kupang ).',
                'featured_image'=>'https://cdn.idntimes.com/content-images/community/2018/12/featured-14-deaead800d5d24650a68bd8ddba984ad_600x400.jpg',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        	
        ]);
    }
}
