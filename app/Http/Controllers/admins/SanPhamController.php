<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public $san_pham;
    public function __construct()
    {
        $this->san_pham = new SanPham();
    }
    public function index()
    {
        
        $title = "Quản lý sản phẩm - danh sách sản phẩm";
        $tablename = "Danh sách sản phẩm";
        $listSanPham = SanPham::get();
        return view('admins.sanphams.danhsach', compact('title', 'listSanPham'));
    }
    public function create()
    {

        $title = "Thêm sản phẩm";

        return view('admins.sanphams.them', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            
             SanPham::create($params);
            return redirect()->route('sanphams.index')->with('success', 'Thêm sản phầm thành công!');
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
        $title = "Chỉnh sửa thông tin sản phẩm";

        // Lấy thông tin chi tiết sản phẩm
        // Sử dụng Query Builder
        $sanPham = $this->san_pham->getDetailProduct($id);

        // Bằng Eloquent
        // $sanPham = SanPham::findOrFail($id);

        return view('admins.sanphams.sua', compact('title', 'sanPham'));
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
