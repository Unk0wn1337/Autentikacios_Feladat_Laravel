<?php

namespace Database\Seeders;

use App\Models\Role;
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
         User::factory(10)->create();

         Role::create(['name' => 'Admin']);
         Role::create(['name' => 'Librarian']);
         Role::create(['name' => 'Warehouseman']);
         Role::create(['name' => 'User']);


        //  User::factory()->create([
        //      'name' => 'Admin User',
        //      'email' => 'admin@akk.szamalk-szalezi.hu',
        //      'password' => 'adminvagyok',
        //      'role' => 0
        //  ]);
        // User::factory()->create([
        //     'name' => 'librarian',
        //     'email' => 'librarian@akk.szamalk-szalezi.hu',
        //     'role' => 1
        // ]);
        // User::factory()->create([
        //     'name' => 'warehouseman',
        //     'email' => 'warehouseman@akk.szamalk-szalezi.hu',
        //     'role' => 2
        // ]);
        // User::factory()->create([
        //     'name' => 'user',
        //     'email' => 'user@akk.szamalk-szalezi.hu',
        //     'role' => 3
        // ]);

    }
}
