<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(25)->create();
        User::create([
            'name'=>'taufiq',
            'email'=>'admin@gmail.com',
            'email_verified_at'=> now(),
            'role' => 'admin',
            'phone' => '6282281593409',
            'bio' => 'flutter developer',
            'password'=> Hash::make('123456'),
        ]);

        User::create([
            'name'=>'Super Admin',
            'email'=>'superadmin@gmail.com',
            'email_verified_at'=> now(),
            'role' => 'superadmin',
            'phone' => '6282281593404',
            'bio' => 'laravel developer',
            'password'=> Hash::make('123456'),
        ]);
    }
}
