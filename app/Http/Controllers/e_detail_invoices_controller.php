<?php

namespace App\Http\Controllers;

use App\Models\accounts;
use App\Models\e_detail_invoices;
use App\Models\e_invoices;
use App\Models\products;
use App\Models\suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function store(Request $rq)
    {
        //
        //  dd($rq);
        //tao hoa don
        $i_e = new e_invoices();
        $i_e->accounts_id = $rq->id_ncc;
        $i_e->e_person = Auth::user()->fullname;
        $i_e->save();

        // Them chi tiet hoa don xuat
        $tongTien=0;
        for($i=0; $i<count($rq->sp_id);$i++){
            $cthd = new e_detail_invoices();
            $cthd -> e_invoices_id = $i_e -> id;
            $cthd-> products_id = $rq->sp_id[$i];
            $cthd-> quantity = $rq->quantity[$i];
            $cthd-> e_price = $rq->price_ban[$i];
            $cthd-> total = $rq->thanh_tien[$i];
            $cthd -> save();

            // Cap nhat tong tien/ So luong san pham
            $sp = products::find($cthd-> products_id);
            $sp->quantity-=$cthd-> quantity;
            $sp->save();

            $tongTien += $cthd -> total;
        }
        $i_e->total = $tongTien;
        $i_e->save();

        // return redirect()->route('i_product')->with('msg', 'Nhập hàng thành công');
        return "hoa don xuat ID = {{$i_e->id}}";
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
