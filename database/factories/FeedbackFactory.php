<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\UserType;
use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
final class FeedbackFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cover_letter' => $this->faker->paragraphs(nb: 5, asText: true),
            'vacancy_id' => Vacancy::factory(),
            'user_id' => User::factory()->create([
                'type' => UserType::EMPLOYER->value,
            ]),
        ];
    }
}
