<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $user)
    {
        $user->create([
            'name' => 'Elisabeth Freeman',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->create([
            'name' => 'Eric Evans',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->create([
            'name' => 'Robert Cecil Martin',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
