<?php

declare(strict_types=1);

namespace App\Http\Controllers\Vacancies;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Vacancies\StoreRequest;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    /**
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function __invoke(StoreRequest $request): RedirectResponse
    {


        return new RedirectResponse(
            url: '/'
        );
    }
}
