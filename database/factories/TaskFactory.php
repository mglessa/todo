<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;

class TaskFactory extends Factory
{

    public function definition(): array
    {
        $userId = User::all()->random();

        return [
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(60),
            'due_date' => $this->faker->dateTime(),
            'user_id' => $userId,
            'category_id' => $userId->categories->random()
        ];
    }
}
