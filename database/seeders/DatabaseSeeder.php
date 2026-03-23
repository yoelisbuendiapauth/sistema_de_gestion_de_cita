<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'yoelis buendia pauth',
            'email' => 'buendiapautyoelia@gmail.com',
             'password' => Hash::make('1101448899'),
        ]);
        User::factory()->create([
            'name' => 'secretaria',
            'email' => 'secretaria@gmail.com',
             'password' => Hash::make('1102434892'),
        ]);
        User::factory()->create([
            'name' => 'medico',
            'email' => 'medicoa@gmail.com',
             'password' => Hash::make('110265409'),
        ]);
        User::factory()->create([
            'name' => 'secretaria',
            'email' => 'secretaria@gmail.com',
             'password' => Hash::make('1102434892'),
        ]);
    }
}
