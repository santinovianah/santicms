<?php

use Illuminate\Database\Seeder;

class aboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kuisabout')->insert([
            [
            'title' => 'Selayang Pandang,',
            'content' => 'Kabupaten Pasuruan adalah kabupaten di Provinsi Jawa Timur, Indonesia. Pusat pemerintah berlokasi di Bangil, Pasuruan. Kabupaten ini berbatasan dengan Kabupaten Sidoarjo dan Laut Jawa di utara, Kabupaten Probolinggo di Timur, Kabupaten Malang di selatan, Kota Batu di barat daya, serta Kabupaten Mojokerto di barat. Kabupaten ini dikenal sebagai daerah perindustrian, pertanian, dan tujuan wisata. Kompleks pegunungan Tengger dengan Gunung Bromo merupakan atraksi wisata utama di Kabupaten Pasuruan.<br><br>Kabupaten Pasuruan memiliki keanekaragaman penduduk yang sebagian besar adalah suku Jawa, selain itu bisa juga ditemui suku-suku lain seperti suku Madura serta masyarakat keturunan Tionghoa-Indonesia, Arab dan India. Suku Jawa di Pasuruan terutama adalah dari mereka yang berbahasa Jawa dialek Wetanan serta subsuku Tengger yang hidup di kawasan Pegunungan Tengger (Kecamatan Tosari).
            Saat Ini Kab. Pasuruan dipimpin oleh seorang bupati yang bernama H.M. Irsyad Yusuf, S.E, MMA (lahir di Pasuruan, Jawa Timur, 10 November 1970;)',
            'created_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],

        	
        ]);
    }
}
