<?php

namespace App\Http\Controllers\Vacancies;

use App\Http\Resources\Web\VacancyResource;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

final class ShowController
{
    /**
     * @param ResponseFactory $response
     */
    public function __construct(
        private ResponseFactory $response,
    ) {}

    /**
     * @param Request $request
     * @param Vacancy $vacancy
     * @return Response
     */
    public function __invoke(Request $request, Vacancy $vacancy): Response
    {
        return $this->response->render(
            component: 'Vacancies/Show',
            props: [
                'vacancy' => new VacancyResource(
                    resource: $vacancy
                ),
            ],
        );
    }
}
