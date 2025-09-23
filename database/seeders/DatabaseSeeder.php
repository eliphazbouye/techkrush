<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
        ]);

        User::firstOrCreate(
            ['email' => 'admin@mail.test'],
            [
                'name' => 'Test Admin',
                'email' => 'admin@mail.test',
                'password' => bcrypt('Password123!'),
                'role_id' => 1, // Admin role
            ]
        );
    }
}
