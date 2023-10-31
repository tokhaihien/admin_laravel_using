<?php

namespace App\Http\Controllers;

use App\Models\product_types;
use Illuminate\Http\Request;

class product_types_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //lấy tất cả dữ liệu
        $lstPT = product_types::all();
        // đưa sang view
        return view('product_type_list', compact('lstPT'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product_type_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $rq)
    {
        //
        $p = new product_types();
        $p->name = $rq->name;
        $p->save();

        return redirect()->route('product_type')->with('msg','Thêm thành công');
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
