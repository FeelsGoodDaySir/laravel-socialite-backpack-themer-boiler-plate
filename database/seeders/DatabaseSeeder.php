<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;
use Backpack\PermissionManager\app\Models\Role;
use Backpack\PermissionManager\app\Models\Permission;

class DatabaseSeeder extends Seeder
{
    public function list_all_crud_actions()
    {
        $controllers = [];
        foreach (\Route::getRoutes()->getRoutes() as $route)
        {
            $action = $route->getAction();
            // dump($action);

            if ( ! ( $action['prefix'] == 'admin' &&
                ( isset( $action['as'] ) && ! str_starts_with( $action['as'], 'backpack' ) )
            ) )
                continue;

            $controllers[] = $action['as'];
        }

        // dd($controllers);
        return $controllers;
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // permissions seeds
        $user_permissions = [
            'user.index', 'user.create', 'user.store', 'user.edit', 'user.update', 'user.destroy', 'user.search',
        ];
        $role_permissions = [
            'role.index', 'role.create', 'role.store', 'role.edit', 'role.update', 'role.destroy', 'role.search',
        ];
        $permission_permissions = [
            'permission.index', 'permission.create', 'permission.store', 'permission.edit', 'permission.update', 'permission.destroy', 'permission.search',
        ];

        $permissions = array_merge(
            $user_permissions,
            $role_permissions,
            $permission_permissions,
        );
        $permissions = array_merge(
            [ 'admin' ],
            $this->list_all_crud_actions()
        );
        Permission::truncate();
        foreach ( $permissions as $permission) {
            echo "adding permission: [".$permission."]".PHP_EOL;
            $p = Permission::create(['name' => $permission, 'guard_name' => 'web']);
        }

        // roles seeds
        $roles = [
            [ 'name' => 'root', 'permissions' => $permissions ],
            [
                'name' => 'user manager',
                'permissions' =>  array_merge($user_permissions, $role_permissions, $permission_permissions)
            ],
            [ 'name' => 'administrator', 'permissions' => [ 'admin' ] ],
            [ 'name' => 'product manager', 'permissions' => [ 'admin' ] ],
            [ 'name' => 'editor', 'permissions' => [ 'admin' ] ],
            [ 'name' => 'finance', 'permissions' => [ 'admin' ] ],
            [ 'name' => 'customers service', 'permissions' => [ 'admin' ] ],
            [ 'name' => 'jobs manager', 'permissions' => [ 'admin' ] ],
            [ 'name' => 'customer', 'permissions' => [ 'admin' ] ],
        ];
        Role::truncate();
        foreach ( $roles as $role ) {
            echo "adding role: [".$role['name']."]".PHP_EOL;
            $r = Role::create(['name' => $role['name'], 'guard_name' => 'web']);
            if ( ! isset($role['permissions']) ) continue;
            foreach ( $role['permissions'] as $permission) {
                echo "giving permission role: [".$role['name']."] <- [$permission]".PHP_EOL;
                $r->givePermissionTo($permission);
            }
        }

        $users = [
            [
                'name'     => 'Admin',
                'email'    => 'admin@localhost',
                'password' => Hash::make('password'),
                'roles' => [
                    'administrator'
                ]
            ], [
                'name'     => 'Customer',
                'email'    => 'demo@localhost',
                'password' => Hash::make('password'),

            ], [
                'name'     => 'Root',
                'email'    => 'root@localhost',
                'password' => Hash::make('password'),
                'roles' => [
                    'root'
                ]
            ]
        ];

        // return;

        User::truncate();
        foreach ( $users as $user )
        {
            $u = User::create([
                'name'     => $user['name'],
                'email'    => $user['email'],
                'password' => $user['password'],
            ]);

            if ( ! isset($user['roles']) ) continue;

            echo "[$u->name] granted <- [".implode( ', ', $user['roles'])."]".PHP_EOL;

            $u->assignRole( $user['roles'] );



            // foreach ( $user['roles'] as $role ) {
            //     echo "Grant $role -> ".$user['name'].PHP_EOL;
            //     // $r = Role::findByName($role);
            //     $u->assignRole( $role );
            // }
        }

        \App\Models\User::factory(10)->create();
    }
}
