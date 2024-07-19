<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\BinhLuan;
use Illuminate\Http\Request;

class BinhLuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listBinhLuan = BinhLuan::get();
        return view('admins.binhluan.danhsach', ['listBinhLuan'=>$listBinhLuan]);
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
        $binhluan = BinhLuan::findOrfail($id);
        return view('admins.binhluan.sua', ['binhluan'=>$binhluan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->isMethod('PUT')){
            $params = $request->except('_method');

            $binhluan = BinhLuan::findOrFail($id);

            // Xử lý cập nhật thông tin
            $binhluan->update($params);
            return redirect()->route('binhluan.index')->with('success', 'Cập nhật bình luận thành công!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        if($request->isMethod('DELETE')){
            $binhluan = BinhLuan::query()->findOrFail($id);
            $binhluan->delete();
                
                return redirect()->route('binhluan.index')->with('success', 'Xóa bình luận thành công!');
        
        }
    }
}
