<?php

declare(strict_types=1);

namespace App\Aggregates;

use App\ValueObjects\VacancyValueObject;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class VacancyAggregate extends AggregateRoot
{
    public function createVacancy( VacancyValueObject $object, int $userID ): self
    {
        

        return $this;
    }
}
