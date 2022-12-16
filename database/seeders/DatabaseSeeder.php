<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//  On appelle les Seeders
use Database\Seeders\UserSeeder;
use Database\Seeders\ProduitSeeder;
use Database\Seeders\CompteSeeder;
use Database\Seeders\ClientSeeder;
use Database\Seeders\VendeurSeeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\BoutiqueSeeder;

use Database\Seeders\EmployeeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VendeurSeeder::class);
        $this->call(BoutiqueSeeder::class);
        $this->call(ProduitSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(EmployeeSeeder::class);

        $this->call(ClientSeeder::class);
    }
}
