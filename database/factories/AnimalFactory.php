<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['Cat', 'Dog', 'Rabbit', 'Bird', 'Fish', 'Hamster'];

        return [
            'name' => $this->faker->firstName(), 
            'age' => $this->faker->numberBetween(1, 15), 
            'type' => $this->faker->randomElement($types),
            'customer_id' => Customer::inRandomOrder()->first()->id, 
        ];
    }
}
