<?php

namespace App\Http\Controllers;

use App\Models\accounts;
use App\Models\products;
use App\Models\suppliers;
use Illuminate\Http\Request;

class e_detail_invoices_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $guest = accounts::where('is_admin', 0)->get();
        $lst_pro = products::all();

        return view('e_product', compact('guest','lst_pro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
