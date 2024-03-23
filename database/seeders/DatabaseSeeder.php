<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => 'hsgjhsgh',
                'remember_token' => Str::random(10),
        ]
    );
    */
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'is_admin' => true,
        ]);
        User::factory()->create([
            'name' => 'OSAMAH ALMEKHLAFI',
            'email' => 'osamah@example.com',
            'is_admin' => true,
        ]);

        User::factory(100)->create();
        Todo::factory(500)->create();
    }
}
