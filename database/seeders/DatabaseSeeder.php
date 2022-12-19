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
        //\App\Models\User::factory(10)->create();

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
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '1',
            'harga' => '1000000000',
        ]);
        //2
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '2',
            'harga' => '6000000' * ('10' * '15'),
        ]);
        //3
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '3',
            'harga' => '1000000000',
        ]);
        //4
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '4',
            'harga' => '6000000' * ('10' * '15'),
        ]);
        //5
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '5',
            'harga' => '1000000000',
        ]);
        //6
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '6',
            'harga' => '6000000' * ('10' * '15'),
        ]);
        //7
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '7',
            'harga' => '1000000000',
        ]);
        //8
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '8',
            'harga' => '6000000' * ('10' * '15'),
        ]);
        //9
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '9',
            'harga' => '1000000000',
        ]);
        //10
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '10',
            'harga' => '6000000' * ('10' * '15'),
        ]);
        //11
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '11',
            'harga' => '1000000000',
        ]);
        //12
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '12',
            'harga' => '6000000' * ('10' * '15'),
        ]);
        //13
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '13',
            'harga' => '1000000000',
        ]);
        //14
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '14',
            'harga' => '6000000' * ('10' * '15'),
        ]);
        //15
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '15',
            'harga' => '1000000000',
        ]);
        //16
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '16',
            'harga' => '6000000' * ('10' * '15'),
        ]);
        // 17
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '17',
            'harga' => '1000000000',
        ]);
        //18
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '18',
            'harga' => '6000000' * ('10' * '15'),
        ]);
        //19
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '19',
            'harga' => '1000000000',
        ]);
        //20 
        \App\Models\Tanah::create([
            'jenis_klaster' => 'Rumah',
            'lebar' => '10',
            'panjang' => '15',
            'luas' => '10' * '15',
            'blok' => 'A',
            'no_rumah' => '20',
            'harga' => '6000000' * ('10' * '15'),
        ]);
      
    }
}
