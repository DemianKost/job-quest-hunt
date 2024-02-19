<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\TagType;
use App\Models\Feedback;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Feedback::factory(10)->create();

        $webTag = Tag::factory()->create([
            'name' => 'Web',
            'type' => TagType::CATEGORY,
        ]);

        $feedback = Feedback::query()->first();
        $feedback->vacancy->tags()->attach( $webTag );
    }
}
