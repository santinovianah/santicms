<?php

use Illuminate\Database\Seeder;

class sejarahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kuissejarah')->insert([
            [
            'title' => 'SEJARAH SINGKAT

            HARI JADI KABUPATEN PASURUAN',
            'content' => 'Sejarah Kabupaten Pasuruan bermula dari Peradaban Kerajaan Kalingga atau Ho Ling yang diperintah oleh  seorang Raja bernama Sima. Pada Tahun 742 - 755 Masehi,  Ibu Kota Kerajaan Kalingga  dipindahkan  ke wilayah timur oleh Raja Kiyen yaitu daerah  Po-Lu-Kia-Sien yang ditafsirkan Pulokerto. Pulokerto adalah salah satu nama desa di wilayah Kecamatan Kraton Kabupaten Pasoeroean',
            'created_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],

        	
        ]);
    }
}
