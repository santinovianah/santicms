<?php

use Illuminate\Database\Seeder;

class VisimisisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visimisis')->insert([
            [
            'content' => 'Meningkatkan kualitas dan produktivitas sektor-sektor produksi dan produk-produk unggulan Kabupaten Pasuruan melalui penguatan kelembagaan sosial dan meningkatkan nilai tambah ekonomi desa berbasis masyarakat dengan cara mempermudah aspek legal dan pembiayaan dalam rangka percepatan pembangunan daerah menuju kesejahteraan masyarakat;',
            'created_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'content' => 'Melaksanakan pembangunan berbasis keluarga dengan memanfaatkan modal sosial berbasis religiusitas dan budaya, guna mewujudkan kohesi sosial;',
                'created_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'content' => 'Meningkatkan kualitas infrastruktur daerah untuk penguatan konektivitas dan aksebilitas masyarakat dalam rangka peningkatan daya saing daerah dengan memperhatikan pemanfaatan segenap potensi sumber daya alam secara bertanggungjawab dan berkelanjutan sebagai bentuk konservasi lingkungan di Kabupaten Pasuruan;',
                'created_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'content' => 'Memperkuat dan memperluas reformasi birokrasi yang mendukung tata kelola pemerintahan dan pelayanan publik yang inovatif, bersih, efektif, akuntabel dan demokratis berbasis pada teknologi informasi;',
                'created_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'content' => 'Meningkatkan pelayanan dasar terutama pelayanan kesehatan, permukiman dan pendidikan dengan mengintegrasikan pendidikan formal dan non formal sebagai wujud afirmasi pendidikan karakter di Kabupaten Pasuruan.',
                'created_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],

        	
        ]);
    }
}
