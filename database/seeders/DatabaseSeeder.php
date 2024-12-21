<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\roles;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Roles::create([
            'id'=> 1,
            'name'=> 'admin',
        ]);
        Roles::create([
            'id' => 2,
            'name'=> 'user',
        ]);
        

        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password'=>Hash::make('12345678'),
            'roles_id'=> 1,
            
        ]);
    }
}
