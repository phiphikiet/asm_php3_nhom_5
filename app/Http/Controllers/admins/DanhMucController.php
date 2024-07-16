<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use Illuminate\Http\Request;


class DanhMucController extends Controller
{
    public $danh_muc;
    public function __construct()
    {
        $this->danh_muc = new DanhMuc();
    }
    public function index()
    {
        
        $title = "Quản lý sản phẩm - danh sách sản phẩm";
        $tablename = "Danh sách danh mục";
        $listDanhMuc = DanhMuc::get();
        return view('admins.danhmucs.danhsach', compact('title', 'listDanhMuc'));
    }
    public function create()
    {

        $title = "Thêm danh mục";

        return view('admins.danhmucs.them', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            
            if ($request->hasFile('hinh_anh')) {
             
                $filename = $request->file('hinh_anh')->store('public/uploads/danhmucs');
            } else {
                $filename = null;
            }
            $params['hinh_anh'] = $filename;
            DanhMuc::create($params);
            return redirect()->route('danhmucs.index')->with('success', 'Thêm danh mục thành công!');

            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Chỉnh sửa thông tin danh mục";
        $danhMuc = $this->danh_muc->getDetailCategory($id);
        return view('admins.danhmucs.sua', compact('title', 'danhMuc'));
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
