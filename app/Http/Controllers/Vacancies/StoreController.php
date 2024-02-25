<?php

declare(strict_types=1);

namespace App\Http\Controllers\Vacancies;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Vacancies\StoreRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Bus\Dispatcher;
use App\Jobs\Web\Vacancies\CreateNewVacancy;
use JustSteveKing\Launchpad\Queue\DispatchableCommandBus;

class StoreController extends Controller
{
    public function __construct(
        private DispatchableCommandBus $bus,
    ) {}

    /**
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $this->bus->dispatch(
            job: new CreateNewVacancy(
                title: $data['title'],
                description: $data['description'],
            ),
        );

        return new RedirectResponse(
            url: '/'
        );
    }
}
