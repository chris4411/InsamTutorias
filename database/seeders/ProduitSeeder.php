<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Produit;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('produit.PRODUIT_FAKE') as $value) {

            Produit::create([
                'name' => $value['name'],
                'technical_name' => $value['technical_name'],
                'image' => $value['image'],
                'stock' => $value['stock'],
                'genre' =>  $value['genre'],
                'categorie' => $value['categorie'],
                'description' => Str::random(10).' '.Str::random(10).' '.Str::random(10).'.',
            ]);
        }
    }
}
