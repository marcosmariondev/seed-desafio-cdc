<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientStepStoreRequest;
use App\Http\Requests\PaymentStepStoreRequest;
use App\Models\ShoppingCart;
use Illuminate\Http\JsonResponse;

class ShoppingCartController extends Controller
{

    public function index(): JsonResponse
    {
        $carts = ShoppingCart::select('*')->paginate(50);

        return response()->json($carts, 200);
    }

    public function clientStep(ClientStepStoreRequest $request): JsonResponse
    {
        $model = ShoppingCart::updateOrCreate(
            ['document' => $request->input('document')],
            $request->validated()
        );

        return response()->json($model,200);
    }

    public function paymentStep(PaymentStepStoreRequest $request): JsonResponse
    {
        $model = ShoppingCart::findOrFail($request->input('id'))
            ->update($request->validated());

        return response()->json($model,200);
    }
}
