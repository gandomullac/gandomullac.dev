<?php

namespace Database\Factories;

use App\Models\Nickname;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class NicknameFactory extends Factory
{
    protected $model = Nickname::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->userName,
            'sort' => $this->faker->numberBetween(1, 100),

            'updated_at' => Carbon::setTestNow(),
            'created_at' => Carbon::setTestNow(),
        ];
    }
}
