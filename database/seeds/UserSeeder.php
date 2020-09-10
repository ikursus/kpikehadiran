<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pengguna 1
        $pengguna1 = User::create([
            'nama' => 'Ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => bcrypt('ahmad'),
            'bahagian' => 'IT',
            'jawatan' => 'Technician',
            'telefon' => '0123456789',
            'status' => 'aktif'
        ]);

        // Pengguna 2
        $pengguna2 = User::create([
            'nama' => 'Abu',
            'email' => 'abu@gmail.com',
            'password' => bcrypt('abu'),
            'bahagian' => 'Kewangan',
            'jawatan' => 'Akauntan',
            'telefon' => '0123456789',
            'status' => 'aktif'
        ]);

        // Pengguna 3
        $pengguna3 = User::create([
            'nama' => 'ali',
            'email' => 'ali@gmail.com',
            'password' => bcrypt('ali'),
            'bahagian' => 'IT',
            'jawatan' => 'Programmer',
            'telefon' => '0123456789',
            'status' => 'aktif'
        ]);
    }
}
