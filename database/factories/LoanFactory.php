<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'loan_date' => fake()->dateTimeBetween('-1 month', '-3 weeks'),
            'return_date' => fake()->dateTimeBetween('-2 weeks', '-1 week'),
            'member_id' => rand(1, 100),
            'book_id' => rand(1, 100)
        ];
    }
}
