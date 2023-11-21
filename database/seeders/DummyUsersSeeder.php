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
        $UserData = [
            [
                'name' => 'Agung Wahyu',
                'email' => 'agung@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('12345')
                
            ],
            [
                'name' => 'Wahyu Eka',
                'email' => 'wahyu@gmail.com',
                'role' => 'pegawai',
                'password' => bcrypt('54321')
            ],
        ];

        foreach ($UserData as $key => $value) {
            User::create($value);
        }
    }
}
