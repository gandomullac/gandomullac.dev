<?php

namespace Database\Factories;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'subtitle' => $this->faker->sentence,
            'category' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'date' => $this->faker->date,

            'updated_at' => Carbon::setTestNow(),
            'created_at' => Carbon::setTestNow(),
        ];
    }
}
