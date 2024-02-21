<?php

declare(strict_types=1);

namespace App\Events;
use App\ValueObjects\VacancyValueObject;

class VacancyWasCreated
{
    public function __construct(
        public VacancyValueObject $object,
        public int $userID,
    ) {}
}