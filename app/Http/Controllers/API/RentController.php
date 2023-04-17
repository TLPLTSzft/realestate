<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRentRequest;
use App\Http\Requests\UpdateRentRequest;
use App\Models\Rent;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rents = Rent::all();
        return response()->json($rents);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRentRequest $request)
    {
        $rent = new Rent();
        $rent->fill($request->all());
        $rent->save();
        return response()->json($rent, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rent = Rent::find($id);
        if (is_null($rent)) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        return response()->json($rent);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRentRequest $request, string $id)
    {
        $rent = Rent::find($id);
        if (is_null($rent)) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        $rent->fill($request->all());
        $rent->save();
        return response()->json($rent);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rent = Rent::find($id);
        if (is_null($rent)) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        Rent::destroy($id);
        return response()->noContent();
    }
}
