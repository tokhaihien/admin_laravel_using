<?php

namespace App\Http\Controllers;

use App\Models\product_types;
use Illuminate\Http\Request;

class api_product_types_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lst_pt = product_types::all();
        return response()->json([
            'success' => true,
            'data' => $lst_pt
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
