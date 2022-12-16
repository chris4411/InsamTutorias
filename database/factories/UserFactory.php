<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{

    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' =>  $this->faker->name(),
            'last_name' =>  $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt("12345678"), // password
            'role' => config('seed_roles.RESTRICT_ROLE_LIST')[rand(0, (sizeof(config('seed_roles.RESTRICT_ROLE_LIST')) -1))],
            'remember_token' => Str::random(10),
        ];
    }
}
