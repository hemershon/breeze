<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'hemershon@gmail.com')->first()) {
            User::create([
                'name' => 'Hemershon',
                'email' => 'hemershon@gmail.com',
                'password' => Hash::make('123123', ['rounds' => 12])
            ]);
        }
    }
}
