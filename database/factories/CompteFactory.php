<?php

namespace Database\Factories;

use App\Models\Compte;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompteFactory extends Factory
{
    protected $model = Compte::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client_id' => Client::factory()->create()->id,
            'addr_paiement' => Str::random(10),
            'est_ferme' => true,
        ];
    }
}
