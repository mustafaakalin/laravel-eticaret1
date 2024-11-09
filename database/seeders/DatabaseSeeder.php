<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'mustafa User',
            'email' => 'mustafa@example.com',
        ]);
        User::factory()->create([
            'name' => 'admin User',
            'email' => 'admin@example.com',
        ]);

            
        // Rol oluşturma
        $role = Role::create(['name' => 'admin']);

        // İzin oluşturma
        $permission = Permission::create(['name' => 'create-users']);
        $user = User::find(3);
        $user->assignRole('admin');
        $user->givePermissionTo('create-users');
        $user->givePermissionTo('edit-users');
        $user->givePermissionTo('delete-users');
        $user->givePermissionTo('read-users');
    }
}
