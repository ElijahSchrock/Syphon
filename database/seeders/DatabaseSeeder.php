<?php

namespace Database\Seeders;

use Database\Factories\LikeDislikeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Comment::factory(50)->create();

       

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        ##Permissions Seeder##

        // Reset cached roles and permissions
        // app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // // create permissions
        // $permissions = [
        //     'categories.create',
        //     'categories.edit',
        //     'categories.delete',
        //     'categories.update'
        // ];

        // foreach ($permissions as $permission)   {
        //     Permission::create([
        //         'name' => $permission
        //     ]);
        // }

        // // gets all permissions via Gate::before rule; see AuthServiceProvider
        // // Role::create(['name' => 'Super Admin']);

        // // $role = Role::findById(2);
        // // $role->givePermissionTo([$permission1, $permission2, $permission3]);

        // $userPermissions = [
        //     'categories.create',
        //     'categories.edit',
        //     'categories.delete',
        //     'categories.update'
        // ];

        // foreach ($userPermissions as $permission)   {
        //     $role->givePermissionTo($permission);
        // }
    }
}
