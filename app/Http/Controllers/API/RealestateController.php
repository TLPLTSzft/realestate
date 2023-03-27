<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Realestate;
use Illuminate\Http\Request;

class RealestateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $realestates = Realestate::all();
        return response()->json($realestates);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $realestate = new Realestate();
        $realestate->fill($request->all());
        $realestate->save();
        return response()->json($realestate, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $realestate = Realestate::find($id);
        if (is_null($realestate)) {
            return response()->json(['message' => 'Ilyen azonosítóval nem található rekord'], 404);
        }
        return response()->json($realestate);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $realestate = Realestate::find($id);
        if (is_null($realestate)) {
            return response()->json(['message' => 'Ilyen azonosítóval nem található rekord'], 404);
        }
        $realestate->fill($request->all());
        $realestate->save();
        return response()->json($realestate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $realestate = Realestate::find($id);
        if (is_null($realestate)) {
            return response()->json(['message' => 'Ilyen azonosítóval nem található rekord'], 404);
        }
        Realestate::destroy($id);
        return response()->noContent();
    }
}
