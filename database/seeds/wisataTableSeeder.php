<?php

use Illuminate\Database\Seeder;

class wisataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kuiswisata')->insert([
            [
            'title' => 'Bromo',
            'content' => 'Gunung Bromo adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.',
            'featured_image'=>'https://3.bp.blogspot.com/-uRWghE6vNG0/Wxqe5cGyPxI/AAAAAAAABqo/4LuDw6t8GPYRkwEh1qMcQXGYJOzr-Kz2ACLcBGAs/s1600/gunung-bromo.jpg',
            'created_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
            'title'=>'Bhakti Alam',
            'content'=>'Bhakti Alam merupakan agrowisata yang menawarkan keindahan alam pegunungan dengan perkebunan buah, bunga bunga dan tanaman yang luas. Tempatnya sangat luas, karena dibangun di tanah seluas 300ha, di dalamnya terdapat taman bunga, taman air "IMUT", tanaman buah buahan, restoran dan juga penginapan .',
            'featured_image'=>'https://1.bp.blogspot.com/-Kjp-2hNDwgY/XaqXLjvje0I/AAAAAAAAE4s/q41thwTCeeAzuKBISba3oKTj1xXd1sD2QCLcBGAsYHQ/s1600/Wisata-Bhakti-Alam-Mojokerto.jpg',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Taman Dayu',
                'content'=>'The Taman Dayu adalah kawasan hunian, resort wisata, dan pusat bisnis yang terletak di Kecamatan Pandaan, Kabupaten Pasuruan, Jawa Timur. Mengusung konsep hunian yang memanjakan penghuninya dengan menyatukan suasana alam dan gaya hidup modern.',
                'featured_image'=>'https://cdn.idntimes.com/content-images/community/2019/03/explorejawa-timur-btp3or6b5vj-4f75d07da145e519395db7ab9f76a603_600x400.jpg',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Pantai Karang Hitam',
                'content'=>'Tempat wisata yang pertama datang dari Pantai Karang Hitam. Penamaan pantai ini diambil dari keindahan pantainya yang memukau terutama ketika matahari mulai tenggelam. Karang-karang yang ada di pantai ini akan berwarna hitam. Pasirnya berwarna coklat bersih dan tergolong unik. Anda bisa menemukan perahu-perahu berlayar dengan warna yang bervariasi.
                Sayangnya memang belum ada sentuhan maksimal terhadap pantai ini. Perlu beberapa fasilitas yang membuat pengunjung nyaman. Lokasinya berada di Pasuruan, Kebun Wates, Lekok.',
                'featured_image'=>'https://www.javatravel.net/wp-content/uploads/2019/10/Pantai-Karang-Hitam.jpg',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Taman Dayu',
                'content'=>'The Taman Dayu adalah kawasan hunian, resort wisata, dan pusat bisnis yang terletak di Kecamatan Pandaan, Kabupaten Pasuruan, Jawa Timur. Mengusung konsep hunian yang memanjakan penghuninya dengan menyatukan suasana alam dan gaya hidup modern.',
                'featured_image'=>'https://cdn.idntimes.com/content-images/community/2019/03/explorejawa-timur-btp3or6b5vj-4f75d07da145e519395db7ab9f76a603_600x400.jpg',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Air Terjun Gumandar',
                'content'=>'Pasuruan juga memiliki curug atau air terjun yang cukup indah. Namanya adalah Air Terjun Gumandar. Perbedaannya adalah air terjun ini tidak memiliki aliran sungai sebagai sumber untuk bisa mengaliri air yang dijatuhkan dai tebing air terjun. Tetapi air terjun berasal dari resapan air yang masuk ke tanah.Lokasi air terjun berada di Jalan Raya Ledug, Prigen. ',
                'featured_image'=>'https://www.javatravel.net/wp-content/uploads/2019/10/Air-Terjun-Gumandar.jpg',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Air Terjun Coban Baung',
                'content'=>'Tempat wisata coban baung ini masuk sebagai kawasan TWA atau taman wisata air yang ada di lereng gunung baung. Ketinggiannya sekitar 100 meter dan membuat air terjunnya mampu membentuk butiran air seperti embun yang terbang mencapai 10 meter.
                Lokasi air terjun ini berada di area sawah atau kebun, Purwodadi, Pasuruan. Tiket masuk yang dikenakan hanya Rp. 8000 saja per orang.',
                'featured_image'=>'https://www.javatravel.net/wp-content/uploads/2019/10/Air-Terjun-Coban-Baung.jpg',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Pemandian Alam Banyu Biru',
                'content'=>'Pemandian Alam Banyu Biru merupakan tempat wisata yang cukup populer di Pasuruan.  Tempat wisata ini merupakan pemandian yang bersumber dari mata air alami yang bisa digunakan sebagai tempat agar bisa melepas lelah sambil berenang. Tidak hanya itu saja, dukungan kondisi sekitar juga masih asri.

                Lokasi wisata ini  berada di Jalan Raya Banyubiru, Sumber Rejo, Winongan. Konon, di kolam pada tempat wisata ini dikeramatkan dan tidak boleh ada seorang pun yang menyentuhnya dan dinamakan ikan sengkaring yang panjangnya mencapai satu meter.',
                'featured_image'=>'https://www.javatravel.net/wp-content/uploads/2019/10/Pemandian-Alam-Banyu-Biru.jpg',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Hutan Mangrove Nguling',
                'content'=>'Wisata hutan mangrove juga terdengar menjadi tempat wisata yang keren. Anda bisa berkunjung dan memberi edukasi kepada anak-anak tentang pentingnya mencintai lingkungan agar terjaga kelestariannya. Dengan keindahan yang diberikan, hutan ini menarik banyak wisatawan.Bahkan ada juga pengunjung yang datang dari Malaysia, Jepang, Thailand hingga Australia. Lokasinya ada di Sawah dan Tambak, Penunggul, Nguling.',
                'featured_image'=>'https://www.javatravel.net/wp-content/uploads/2019/10/Hutan-Mangrove-Nguling.jpg',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Sawahe Pak Budi',
                'content'=>'Ada fasilitas yang cukup lengkap di tempat wisata ini. Namanya adalah Sawahe Pak Budi. Termasuk sebagai eduwisata, Anda bisa mengajak seluruh anggota keluarga untuk berlibur bersama. Nama tempat wisata tersebut tak lain karena pemiliknya juga bernama Pak Budi. Wisata ini menghadirkan lokasi wisata alam yang mengedukasi untuk semua orang.
                Ada fasilitas seperti area peternakan organik, pertanian organik hingga kids house. Lokasi tempat wisata ini ada di Sekar Mojo, Purwosari Pasuruan.',
                'featured_image'=>'https://www.javatravel.net/wp-content/uploads/2019/10/Sawahe-Pak-Budi.jpg',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Wisata Tretes Prigen',
                'content'=>'Hanya dengan waktu 1 jam saja Anda bisa mengunjungi wisata Tretes Prigen dari pusat Kota Pasuruan. Ada destinasi wisata alam yang sejuk dan begitu menenangkan. Keindahan alam yang tersaji disini memiliki view pegunungan dan menjadi tempat favorit untuk bisa mengisi waktu liburan.
                Spot wisata menarik juga bisa Anda dapatkan seperti kawasan wisata air terjun, hutan, taman satwa dan masih banyak lainnya. lokasinya berada di Kecamatan Prigen, Kabupaten Pasuruan.',
                'featured_image'=>'https://www.javatravel.net/wp-content/uploads/2019/10/Wisata-Tretes-Prigen.jpg',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        	
        ]);
    }
}
