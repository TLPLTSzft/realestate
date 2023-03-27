<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

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
    public function store(Request $request)
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
            return response()->json(['message' => 'Ilyen azonosítóval nem található rekord'], 404);
        }
        return response()->json($sale);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sale = Sale::find($id);
        if (is_null($sale)) {
            return response()->json(['message' => 'Ilyen azonosítóval nem található rekord'], 404);
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
            return response()->json(['message' => 'Ilyen azonosítóval nem található rekord'], 404);
        }
        Sale::destroy($id);
        return response()->noContent();
    }
}
