<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'faleh',
            'nama_lengkap' => 'Muhamad Faleh Alfawwaz',
            'password' => 'inirahasiakawan',
        ]);

        User::create([
            'username' => 'rafi',
            'nama_lengkap' => 'Muhamad Rafi Ardiansyah',
            'password' => 'pasirkojamacet',
        ]);
    }
}