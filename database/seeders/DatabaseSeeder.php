<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory()->create([
            'name' => $name = 'Uzumaki Naruto',
            'username' => usernameGenerator($name),
            'email'  => 'naruto@cendekia.test',
        ])->assignRole(Role::create(['name' => 'admin']));

        User::factory()->create([
            'name' => $name = 'Nami',
            'username' => usernameGenerator($name),
            'email'  => 'nami@cendekia.test',
        ])->assignRole(Role::create(['name' => 'operator']));

        User::factory()->create([
            'name' => $name = 'Robin',
            'username' => usernameGenerator($name),
            'email'  => 'robin@cendekia.test',
        ])->assignRole(Role::create(['name' => 'member']));

        $this->call(CategorySeeder::class);
        $this->call(PublisherSeeder::class);
    }
}
