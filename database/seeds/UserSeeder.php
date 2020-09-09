<?php

use Illuminate\Database\Seeder;

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
        DB::table('users')->insert([
            'nama' => 'Ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => bcrypt('ahmad'),
            'bahagian' => 'IT',
            'jawatan' => 'Technician',
            'telefon' => '0123456789',
            'status' => 'aktif'
        ]);

        // Pengguna 2
        DB::table('users')->insert([
            'nama' => 'Abu',
            'email' => 'abu@gmail.com',
            'password' => bcrypt('abu'),
            'bahagian' => 'Kewangan',
            'jawatan' => 'Akauntan',
            'telefon' => '0123456789',
            'status' => 'aktif'
        ]);

        // Pengguna 3
        DB::table('users')->insert([
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
