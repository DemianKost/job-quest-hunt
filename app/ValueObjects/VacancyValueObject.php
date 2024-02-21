<?php

declare(strict_types=1);

namespace App\ValueObjects;

class VacancyValueObject
{
    public function __construct(
        public string $title,
        public string $description,
    ) {}

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
        ];
    }
}