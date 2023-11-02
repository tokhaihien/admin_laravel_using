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

        return view('product_list', compact('lstP', 'lstPT'));
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
        // dd($rq);
        //
        $p = new products();
        $p->name = $rq->name;
        $p->product_types_id = $rq->product_type;
        $p->save();

        $id = products::max('id');

        $img = new images();
        $img->products_id = $id;

        if ($rq->hasFile('_img')) {
            // lấy đuôi ảnh
            $duoi_anh = $rq->file('_img')->extension();
            // set lại name của ảnh va luu vao thu muc
            $img_name = $rq->file('_img')->storeAs('images/products', $id . '.' . $duoi_anh);

            $img->url = $img_name;
        } else {
            $img->url = 'images/products/noimg.png';
        }
        $img->save();
        return redirect()->route('product')->with('msg', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $lstPT = product_types::all();
        $P = products::with('images')->with('product_types')->find($id);
        // $P = products::find($id);
        
        return view('product_edit', compact('P', 'lstPT'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $rq ,$id)
    {
        //
        $p = products::find($id);
        $p->name = $rq->name;
        $p->product_types_id = $rq->product_type;
        $p->save();

        $img = images::where('products_id', $id)->first();
        $temp = $img -> url;
        // dd($temp);

        if ($rq->hasFile('_img')) {
            // lấy đuôi ảnh
            $duoi_anh = $rq->file('_img')->extension();
            // set lại name của ảnh va luu vao thu muc
            $img_name = $rq->file('_img')->storeAs('images/products', $id . '_edit.' . $duoi_anh);

            $img->url = $img_name;
        } else {
            $img->url = $temp;
        }
        $img->save();
        return redirect()->route('product')->with('msg', 'Cập nhật thành công');
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
    public function destroy($id)
    {
        //
        $p = products::find($id);
        $p->delete();
        return redirect()->route('product')->with('msg', 'Xóa thành công');
    }
}
