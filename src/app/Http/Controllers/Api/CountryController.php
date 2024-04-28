<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryStoreRequest;
use App\Models\Country;
use Illuminate\Http\JsonResponse;

class CountryController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(CountryStoreRequest $request): JsonResponse
    {
        $model = Country::create($request->validated());

        return response()->json($model,200);
    }

}
