<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\WorkTime;
use App\Models\BreakTime;

class BreakTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'work_time_id' => WorkTime::factory(),
            'start_break' => $this->faker->time,
            'end_break' => $this->faker->time,
        ];
    }
}
