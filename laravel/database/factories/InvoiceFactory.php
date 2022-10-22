<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['B', 'P', 'V']);
        if($status === 'P') {
            $paidDate = $this->faker->dateTimeThisDecade(); 
        }
        else {
            $paidDate = NULL; 
        }
        return [
            'customer_id' => Customer::class(), 
            'amount' => $this->faker->numberBetween(100, 20000), 
            'status' => $status, 
            'bill_date' => $this->faker->dateTimeThisDecade(), 
            'paid_date' => $paidDate
        ];
    }
}
