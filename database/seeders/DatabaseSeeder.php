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

        // \App\Models\Post::factory(10)->create();

       

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $permissions = [
            'post.create',
            'post.edit',
            'post.delete',
            'post.update'
        ];

        foreach ($permissions as $permission)   {
            Permission::create([
                'name' => $permission
            ]);
        }

        // gets all permissions via Gate::before rule; see AuthServiceProvider
        Role::create(['name' => 'Super Admin']);

        $user = Role::create(['name' => 'User']);

        $userPermissions = [
            'post.create',
            'post.edit',
            'post.delete',
            'post.update'
        ];

        foreach ($userPermissions as $permission)   {
            $user->givePermissionTo($permission);
        }
    }
}
