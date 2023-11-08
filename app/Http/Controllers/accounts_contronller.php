<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class accounts_contronller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pages-login');
    }

    public function login(Request $rq)
    {
        //
        if(Auth::attempt(['username' => $rq->username, 'password' => $rq->password])){
            return redirect()->route('idx')->with('msg', 'Đăng nhập thành công');
        }
        return redirect()->route('login.login')->with('msg', 'Sai tên đăng nhập hoặc mật khẩu!');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.login')->with('msg', 'Đăng xuất thành công!');
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
