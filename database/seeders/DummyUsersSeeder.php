<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Mas Siswa',
                'email'=>'siswa@gmail.com',
                'role'=>'siswa',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas guru',
                'email'=>'guru@gmail.com',
                'role'=>'guru',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas kepsek',
                'email'=>'kepsek@gmail.com',
                'role'=>'kepsek',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas orangtua',
                'email'=>'orangtua@gmail.com',
                'role'=>'orangtua',
                'password'=>bcrypt('123456')
            ],
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
