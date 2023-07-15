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
            'name' => 'Admin Desa Kedungpilang',
            'username' => 'admindesa',
            'level' => 'superadmin',
            'password' => Hash::make('proadmindesa')
        ]);
        User::create([
            'name' => 'Admin Dukuh Kedungpilang',
            'username' => 'adminkedungpilang',
            'level' => 'admin',
            'password' => Hash::make('kedungpilang123')
        ]);
        User::create([
            'name' => 'Admin Dukuh Gambir',
            'username' => 'admingambir',
            'level' => 'admin',
            'password' => Hash::make('gambir123')
        ]);
        User::create([
            'name' => 'Admin Dukuh Kunci Ombo',
            'username' => 'adminkunciombo',
            'level' => 'admin',
            'password' => Hash::make('kunciombo123')
        ]);
        User::create([
            'name' => 'Admin Dukuh Kedung Bulu',
            'username' => 'adminkedungbulu',
            'level' => 'admin',
            'password' => Hash::make('kedungbulu123')
        ]);
        User::create([
            'name' => 'Admin Dukuh Kedung Padas',
            'username' => 'adminkedungpadas',
            'level' => 'admin',
            'password' => Hash::make('kedungpadas123')
        ]);
    }
}
