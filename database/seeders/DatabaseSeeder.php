<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(9)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
            
        // ]);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('akuadmin'),
        ]);
        //1
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Anggrek',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '1',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //2
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Anggrek',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '2',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //3
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Anggrek',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '3',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //4
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Anggrek',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '4',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //5
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Anggrek',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '5',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //6
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Anggrek',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '6',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //7
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Anggrek',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '7',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //8
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Anggrek',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '8',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //9
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Anggrek',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '9',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //9
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Anggrek',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '9',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //11
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Jasmine',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '11',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //12
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Jasmine',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '12',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //13
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Jasmine',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '13',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //14
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Jasmine',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '14',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //14
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Jasmine',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '14',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //16
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Jasmine',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '16',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        // 17
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Jasmine',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '17',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //18
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Jasmine',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '18',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //19
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Jasmine',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '19',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //20 
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Jasmine',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '20',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //21
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Maple',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '20',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //22
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Maple',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '20',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //23
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Maple',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '20',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //24
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Maple',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '20',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //25
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Maple',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '20',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //26
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Maple',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '20',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //27
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Maple',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '20',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //28
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Maple',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '20',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //29
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Maple',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '20',
            'harga' => '6000000' * ('9' * '14'),
        ]);
        //30
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Maple',
            'lebar' => '9',
            'panjang' => '14',
            'luas' => '9' * '14',
            'blok' => 'A',
            'no_rumah' => '20',
            'harga' => '6000000' * ('9' * '14'),
        ]);
      
    }
}
