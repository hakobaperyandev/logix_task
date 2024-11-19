<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyOrder>
 */
class CompanyOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => Company::inRandomOrder()->first()->id,
            'order_id'   => Order::inRandomOrder()->first()->id,
            'start'      => $this->faker->date,
            'end'        => $this->faker->date,
            'notified'   => false
        ];
    }
}
