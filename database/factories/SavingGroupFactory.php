<?php

namespace Database\Factories;

use App\Models\SavingGroup;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SavingGroup>
 */
class SavingGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['couple', 'friend', 'family', 'organization', 'individual'];
        $randomAmount = [
            500000,
            1000000,
            1500000,
            2000000,
            3500000,
            5000000,
            1000000,
            50000000,
            100000000,
            1000000000,
            2500000000,
            1000000000000
        ];

        return [
            'name' => fake()->words(3, true),
            'category' => fake()->randomElement($categories),
            'description' => fake()->sentence(),
            'target_amount' => fake()->randomElement($randomAmount),
            'icon' => fake()->randomElement(['🏦', '🏝️', '🏠', '🚗', '🎓', '💼']),
            'color' => fake()->randomElement(['#6366f1', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6']),
            'created_by' => User::factory()
        ];
    }
}
