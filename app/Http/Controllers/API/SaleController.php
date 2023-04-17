<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Sale;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::all();
        return response()->json($sales);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaleRequest $request)
    {
        $sale = new Sale();
        $sale->fill($request->all());
        $sale->save();
        return response()->json($sale, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sale = Sale::find($id);
        if (is_null($sale)) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        return response()->json($sale);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaleRequest $request, string $id)
    {
        $sale = Sale::find($id);
        if (is_null($sale)) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        $sale->fill($request->all());
        $sale->save();
        return response()->json($sale);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sale = Sale::find($id);
        if (is_null($sale)) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        Sale::destroy($id);
        return response()->noContent();
    }
}
