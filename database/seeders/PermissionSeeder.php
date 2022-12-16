<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('seed_roles.PERMISSIONS_LIST') as $value) {

            Permission::create([
                'name' => $value['name'],
                'display_name' => $value['display_name'],
                'description' => $value['description'],
                'role' => $value['role'],
            ]);

        }
    }
}
