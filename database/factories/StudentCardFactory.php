<?php

namespace Database\Factories;

use App\Models\StudentCard;
use App\Models\User; // Add this import statement
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\SchoolEnum;

/**
 * @template TModel of \App\Models\StudentCard
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<TModel>
 */
class StudentCardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<TModel>
     */
    protected $model = StudentCard::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [


            'school' => fake()->randomElement(SchoolEnum::getValues()),
            'description' => fake()->sentence(),
            'is_internal' => fake()->boolean(),
            'date_of_birth' => fake()->dateTimeBetween('-50 years', 'now')->format('Y-m-d'),
            'user_id' => User::factory(),
        ];
    }
}
