<?php

declare(strict_types=1);

namespace App\Http\Controllers\Vacancies;

use App\Http\Controllers\Controller;
use App\Http\Resources\Web\VacancyResource;
use App\Models\Vacancy;
use Inertia\Response;
use Inertia\ResponseFactory;

final class IndexController extends Controller
{
    /**
     * @param ResponseFactory $response
     */
    public function __construct(
        private ResponseFactory $response,
    ) {}
    
    /**
     * @return Response
     */
    public function __invoke(): Response
    {
        return $this->response->render(
            component: 'Vacancies/Index',
            props: [
                'vacancies' => VacancyResource::collection(
                    resource: Vacancy::query()->latest()->get()
                ),
            ]
        );
    }
}
