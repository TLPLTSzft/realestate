<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRentalRequest;
use App\Http\Requests\UpdateRentalRequest;
use App\Models\Rental;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals = Rental::all();
        return response()->json($rentals);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRentalRequest $request)
    {
        $rental = new Rental();
        $rental->fill($request->all());
        $rental->save();
        return response()->json($rental, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rental = Rental::find($id);
        if (is_null($rental)) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        return response()->json($rental);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRentalRequest $request, string $id)
    {
        $rental = Rental::find($id);
        if (is_null($rental)) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        $rental->fill($request->all());
        $rental->save();
        return response()->json($rental);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rental = Rental::find($id);
        if (is_null($rental)) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        Rental::destroy($id);
        return response()->noContent();
    }
}
