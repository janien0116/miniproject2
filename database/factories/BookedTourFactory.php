<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookedTour>
 */
class BookedTourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Destination' => $this->faker->randomElement(['La Union', 'Sagada', 'Ilocos', 'Puerto Galera']),
            'FromDate' => $this->faker->date(),
            'ToDate' => $this->faker->date(),
            'SeatsBooked' => $this->faker->numberBetween(0, 12),
            'PickupPoint' => $this->faker->randomElement(['SM Mall of Asia', 'Robinsons Galleria', 'SM Sta Rosa', 'SM Lucena']),
            'PickupTime' => $this->faker->dateTimeThisCentury()->format('g:i A'),
            'Inclusions' => $this->faker->paragraphs(3, true),
            'Price' => $this->faker->randomFloat(2, 10, 100),
            'BookedBy' => $this->faker->name,
            'ReferenceNo' => $this->faker->unique()->regexify('[A-Za-z0-9]{10}'),
            'name' => Str::slug($this->faker->userName, ''),
        ];
    }
}
