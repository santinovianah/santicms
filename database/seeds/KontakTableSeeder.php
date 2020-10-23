<?php

use Illuminate\Database\Seeder;

class KontakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kontaks')->insert([
            [
            'title' => 'Sisca',
            'content' => 'Nice',
            'created_at'  => \Carbon\Carbon::now('Asia/Jakarta'),
            'updated_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
            'title'=>'Doni',
            'content'=>'Bagus kak',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta'),
            'updated_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Nanda',
                'content'=>'Aku pernah ke pasuruan',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Tita',
                'content'=>'Pasuruan tempat kelahiranku!',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'title'=>'Yunu',
                'content'=>'Wow pasuruan tambah bagus ya',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at'  => \Carbon\Carbon::now('Asia/Jakarta')
            ],
   
        ]);
    }
}
