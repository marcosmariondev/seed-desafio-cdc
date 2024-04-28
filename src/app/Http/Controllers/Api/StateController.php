<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StateStoreRequest;
use App\Models\State;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StateController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(StateStoreRequest $request): JsonResponse
    {
        $model = State::create($request->validated());

        return response()->json($model,200);
    }

}
