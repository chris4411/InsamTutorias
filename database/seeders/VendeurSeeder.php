<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Vendeur;
use App\Models\User;
use App\Models\Role;

class VendeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        $role = Role::where('name', '=', config('seed_roles.VENDEUR_ROLE'))->get()->pluck('id');
        while($i < 10){

            $user  = User::create([
                'first_name' => Str::random(10),
                'last_name' => 'Vendeur '.$i,
                'email' => Str::random(10).'@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt("12345678"),
                'role' => config('seed_roles.VENDEUR_ROLE'),
                'remember_token' => Str::random(10)
            ])->attachRole($role[0]);

            $vendeur = Vendeur::create([
                'user_id' => $user->id,
                'status' => 'Actif',
            ]);

            $i++;
        }
    }
}
