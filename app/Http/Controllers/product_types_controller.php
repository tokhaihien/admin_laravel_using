<?php

namespace App\Http\Controllers;

use App\Models\product_types;
use Illuminate\Http\Request;

class product_types_controller extends Controller
{
    public function index()
    {
        //lấy tất cả dữ liệu
        $lstPT = product_types::all();
        // đưa sang view
        return view('product_type_list', compact('lstPT'));
    }
    public function create()
    {
        return view('product_type_create');
    }
    public function store(Request $rq)
    {
        //
        $p = new product_types();
        $p->name = $rq->name;
        $p->save();

        return redirect()->route('product_type')->with('msg','Thêm thành công');
    }
    public function show(string $id)
    {
        //
        $p = product_types::find($id);
        return view('product_type_edit',compact('p'));
    }
    public function edit(Request $rq,$id)
    {
        //
        $p = product_types::find($id);
        $p->name=$rq->name;
        $p->save();
        return redirect()->route('product_type')->with('msg','Cập nhật thành công');
    }
    public function destroy($id)
    {
        //
        $p = product_types::find($id);
        $p->delete();
        return redirect()->route('product_type')->with('msg','Xóa thành công');
    }
}
