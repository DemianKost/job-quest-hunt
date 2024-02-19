<?php

declare(strict_types=1);

namespace App\Jobs\Web\Vacancies;

use App\Models\Vacancy;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateNewVacancy implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * @param string $title
     * @param string $description
     */
    public function __construct(
        public readonly string $title,
        public readonly string $description,
    ) {}

    public function handle(): void
    {
        Vacancy::query()->create([
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
