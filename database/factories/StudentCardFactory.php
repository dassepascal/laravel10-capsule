<?php

namespace Database\Factories;

use App\Models\StudentCard;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            //
        ];
    }
}
