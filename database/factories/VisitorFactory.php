<?php

namespace Database\Factories;

use App\Models\ModelVisitor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Visitor>
 */
class VisitorFactory extends Factory
{
    protected $model = ModelVisitor::class; 

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'address'=>fake()->address(),
            'position'=>fake()->randomLetter(),
            //
        ];
    }
}