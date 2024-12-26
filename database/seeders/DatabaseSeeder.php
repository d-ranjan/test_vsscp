<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'view subjects']);
        Permission::create(['name' => 'create subjects']);
        Permission::create(['name' => 'edit subjects']);
        Permission::create(['name' => 'delete subjects']);
        Permission::create(['name' => 'view courses']);
        Permission::create(['name' => 'create courses']);
        Permission::create(['name' => 'edit courses']);
        Permission::create(['name' => 'delete courses']);

        // create roles and assign existing permissions
        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo('view subjects');
        $userRole->givePermissionTo('view courses');

        $teacherRole = Role::create(['name' => 'teacher']);
        $teacherRole->givePermissionTo('view subjects');
        $teacherRole->givePermissionTo('view courses');
        $teacherRole->givePermissionTo('edit subjects');
        $teacherRole->givePermissionTo('edit courses');

        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo('view subjects');
        $adminRole->givePermissionTo('view courses');
        $adminRole->givePermissionTo('edit subjects');
        $adminRole->givePermissionTo('edit courses');
        $adminRole->givePermissionTo('create subjects');
        $adminRole->givePermissionTo('delete subjects');
        $adminRole->givePermissionTo('create courses');
        $adminRole->givePermissionTo('delete courses');

        $superAdminRole = Role::create(['name' => 'Super-Admin']);
        // create demo users
        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'tester@example.com',
        ]);
        $user->assignRole($userRole);

        $user = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);
        $user->assignRole($adminRole);

        $user = User::factory()->create([
            'name' => 'Super-Admin',
            'email' => 'superadmin@example.com',
        ]);
        $user->assignRole($superAdminRole);
    }
}
