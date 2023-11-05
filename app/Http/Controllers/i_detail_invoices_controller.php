<?php

namespace App\Http\Controllers;

use App\Models\i_detail_invoices;
use App\Models\i_invoices;
use App\Models\products;
use App\Models\suppliers;
use Illuminate\Http\Request;

class i_detail_invoices_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lst_sup = suppliers::all();
        $lst_pro = products::all();

        return view('i_product', compact('lst_sup','lst_pro'));
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
        //tao hoa don
        $i_e = new i_invoices();
        $i_e->suppliers_id = $rq->id_ncc;
        $i_e->i_person = "To Khai Hien";
        $i_e->i_phone = "0866508347";
        $i_e->save();

        // Them chi tiet hoa don
        $tongTien=0;
        for($i=0; $i<count($rq->sp_id);$i++){
            $cthd = new i_detail_invoices();
            $cthd -> i_invoices_id = $i_e -> id;
            $cthd-> products_id = $rq->sp_id[$i];
            $cthd-> quantity = $rq->quantity[$i];
            $cthd-> i_price = $rq->price_nhap[$i];
            $cthd-> e_price = $rq->price_ban[$i];
            $cthd-> total = $rq->thanh_tien[$i];
            $cthd -> save();

            // Cap nhat tong tien/ So luong san pham
            $sp = products::find($cthd-> products_id);
            $sp->quantity+=$cthd-> quantity;
            $sp->price = $cthd-> e_price;
            $sp->save();

            $tongTien += $cthd -> total;
        }
        $i_e->total = $tongTien;
        $i_e->save();

        return "Them hoa don thanh cong ID = {{$i_e->id}}";
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
