<?php

namespace Database\Factories;

use App\Models\Curriculum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CurriculumFactory extends Factory
{
    protected $model = Curriculum::class;

    public function definition(): array
    {
        $name = $this->faker->sentence;
        $language = $this->faker->randomElement(['en', 'it']);

        return [
            'name' => $name,
            'language' => $language,
            'updated_at' => Carbon::setTestNow(),
            'created_at' => Carbon::setTestNow(),
        ];
    }
}
