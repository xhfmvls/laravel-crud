<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['I', 'B']);
        if($type === 'I') {
            $name = $this->faker->name();
        } 
        else {
            $name = $this->faker->company();
        }

        return [
            'name' => $name, 
            'type' => $type, 
            'email' => $this->faker->email(),
            'address' => $this->faker->address()
        ];
    }
}
