<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Client;
use App\Models\User;
use App\Models\Role;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Client::factory()->count(5)->create();
        $i = 0;
        while($i < 15){
            $role = Role::where('name', '=', config('seed_roles.CLIENT_ROLE'))->get()->pluck('id');

            $user  = User::Create([
                'first_name' => Str::random(10),
                'last_name' => 'Client '.$i,
                'email' => Str::random(10).'@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt("12345678"),
                'role' => config('seed_roles.CLIENT_ROLE'),
                'remember_token' => Str::random(10)
            ])->attachRole($role[0]);

            $client = Client::create([
                'user_id' => $user->id,
                'status' => 'Nouveau',
            ]);

            $i++;
        }
    }
}
