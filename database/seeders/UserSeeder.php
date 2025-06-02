<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Dr. Andi',
                'email' => 'andi@gmail.com',
                'password' => Hash::make('dokter123'),
                'role' => 'dokter',
                'alamat' => 'Jl. Sehat No.1',
                'no_ktp' => '1234567890123456',
                'no_hp' => '08123456789O',
                'no_rm' => null,
                'poli' => 'Umum',
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi@gmail.com',
                'password' => Hash::make('dokter123'),
                'role' => 'pasien',
                'alamat' => 'Jl. Mawar No.5',
                'no_ktp' => '9876543210987654',
                'no_hp' => '082112345678',
                'no_rm' => 'RM001',
                'poli' => null,
            ],
        ];
        
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
