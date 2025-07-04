<?php

namespace Database\Seeders;

use App\Models\Tweet;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Fahim',
            'email' => 'f.hasan@gmail.com'
        ]);
        Tweet::factory(40)->create();
    }
}
