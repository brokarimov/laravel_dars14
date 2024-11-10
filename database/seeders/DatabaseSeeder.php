<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\PermissionGroup;
use App\Models\Permissions;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $routes = Route::getRoutes();

        $permissionGroups = [];

        foreach ($routes as $route) {
            $key = $route->getName();

            if ($key && !str_starts_with($key, 'generated::') && $key != 'storage.local') {
                $routeNameParts = explode('.', $key);
                $groupName = ucfirst($routeNameParts[0]);

                if (!isset($permissionGroups[$groupName])) {
                    $permissionGroups[$groupName] = [];
                }

                $permissionGroups[$groupName][] = $key;
            }
        }

        foreach ($permissionGroups as $groupName => $routeKeys) {
            $permissionGroup = PermissionGroup::create(['name' => $groupName]);

            foreach ($routeKeys as $key) {
                $name = ucfirst(str_replace('.', '-', $key));

                $permission = Permissions::create([
                    'key' => $key,
                    'name' => $name,
                    'permission_group_id' => $permissionGroup->id
                ]);
            }
        }



        // Create users
        for ($i = 1; $i <= 10; $i++) {
            $user = User::create([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'password' => Hash::make('12345'),
            ]);
        }
    }
}