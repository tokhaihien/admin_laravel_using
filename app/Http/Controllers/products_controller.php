<?php

namespace App\Http\Controllers;

use App\Models\images;
use App\Models\product_types;
use App\Models\products;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class products_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //lay tat ca danh sach
        $lstPT = product_types::all();
        $lstP = products::with('images')->with('product_types')->get();

        return view('product_list',compact('lstP','lstPT'));
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
    public function store(Request $rq)
    {
        //
        $p = new products();
        $p->name = $rq->name;
        $p->product_types_id=$rq->product_type;
        $p->save();

        $id = products::max('id');

        $img = new images();
        $img->products_id = $id;
        $img->url = 'images/products/noimg.png';
        $img->save();
        return redirect()->route('product')->with('msg','Thêm thành công');
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
