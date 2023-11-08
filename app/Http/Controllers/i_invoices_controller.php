<?php

namespace App\Http\Controllers;

use App\Models\i_invoices;
use Illuminate\Http\Request;

class i_invoices_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lst_invoices = i_invoices::all();
        return view('i_invoices', compact('lst_invoices'));
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
