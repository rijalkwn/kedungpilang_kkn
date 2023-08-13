<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        User::create([
            'name' => 'Admin Satu Desa Kedungpilang',
            'username' => 'admindesa',
            'level' => 'superadmin',
            'password' => Hash::make('admindesa123')
        ]);
        User::create([
            'name' => 'Admin Dua Desa Kedungpilang',
            'username' => 'admindesa2',
            'level' => 'admin',
            'password' => Hash::make('admindesa123')
        ]);
    }
}
