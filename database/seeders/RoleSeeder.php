<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        // print_r(config('seed_roles.LARATRUST_ROLES'));
        // die();
        foreach ( config('seed_roles.LARATRUST_ROLES') as $key => $value) {
            $role = Role::create([
                'name' => $value['name'],
                'display_name' => $value['display_name'],
                'description' => $value['description']
            ]);
            $permission = NULL;
            $role_autorized = [config('seed_roles.LIVREUR_ROLE') ];

            switch ($value['name']) {
                case config('seed_roles.LIVREUR_ROLE'):
                    $role_autorized = [config('seed_roles.LIVREUR_ROLE')];
                    $permission = Permission::whereIn('role', $role_autorized)->get()->pluck('id');

                    break;
                case config('seed_roles.WEBUSER_ROLE'):
                    $role_autorized = [config('seed_roles.LIVREUR_ROLE'), config('seed_roles.WEBUSER_ROLE')];
                    $permission = Permission::whereIn('role', $role_autorized)->get()->pluck('id');

                    break;
                case config('seed_roles.CLIENT_ROLE'):
                    $role_autorized = [config('seed_roles.LIVREUR_ROLE'), config('seed_roles.WEBUSER_ROLE'), config('seed_roles.CLIENT_ROLE')];
                    $permission = Permission::whereIn('role', $role_autorized)->get()->pluck('id');

                    break;
                case config('seed_roles.VENDEUR_ROLE'):
                    $role_autorized = [config('seed_roles.LIVREUR_ROLE'), config('seed_roles.WEBUSER_ROLE'), config('seed_roles.CLIENT_ROLE'), config('seed_roles.VENDEUR_ROLE')];
                    $permission = Permission::whereIn('role', $role_autorized)->get()->pluck('id');

                    break;

                default:
                    $role_autorized = [config('seed_roles.LIVREUR_ROLE'),config('seed_roles.WEBUSER_ROLE'), config('seed_roles.CLIENT_ROLE'), config('seed_roles.VENDEUR_ROLE'), config('seed_roles.ADMIN_ROLE')];
                    $permission = Permission::whereIn('role', $role_autorized)->get()->pluck('id');

                    break;
            }

            $role->attachPermissions($permission);
        }

    }
}
