<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        foreach (config('seed_admin.ADMINISTRATOR_LIST') as $value) {
            $role = NULL;
            $role = Role::where('name', '=', config('seed_roles.ADMIN_ROLE'))->get()->pluck('id');

            User::create([
                'first_name' => $value['first_name'],
                'last_name' => $value['last_name'],
                'email' => $value['email'],
                'email_verified_at' => $value['email_verified_at'],
                'password' => bcrypt("12345678"),
                'role' => config('seed_roles.ADMIN_ROLE'),
                'remember_token' => Str::random(10)
            ])->attachRole($role[0]);
        }

    }
}
