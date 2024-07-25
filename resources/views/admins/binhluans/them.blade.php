@extends('layouts.admin')
@section("title")

@endsection
@section('head')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admins/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admins/dist/css/adminlte.min.css')}}">
@endsection
@section("content")
<div class="row">
    <!-- left column -->
     <div class="col-12">
<<<<<<< HEAD:resources/views/admins/sanphams/them.blade.php
        <form action="{{route("admin.sanpham.store")}}" method="POST" enctype="multipart/form-data">
            @csrf
=======
        <form action="{{route('sanpham.store')}}" method="POST" enctype="multipart/form-data">
>>>>>>> kiệt:resources/views/admins/binhluan/them.blade.php
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin sản phẩm</h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
<<<<<<< HEAD:resources/views/admins/sanphams/them.blade.php
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Tên sản phẩm</label>
                                            <input type="text" class="form-control" id="name" name="ten_san_pham" placeholder="Nhập tên sản phẩm">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name">Mã sản phẩm</label>
                                            <input type="text" class="form-control" id="name" name="ma_san_pham" placeholder="Nhập tên sản phẩm">
                                        </div>
                                    </div> 
                                    
                                    <div class="form-group">
                                        <label for="description">Mô tả sản phẩm</label>
                                        <textarea class="form-control" id="description" name="mo_ta" rows="3" placeholder="Nhập mô tả sản phẩm"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Giá sản phẩm</label>
                                        <input type="number" class="form-control" id="price" name="gia_san_pham" placeholder="Nhập giá sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Giá khuyến mãi</label>
                                        <input type="number" class="form-control" id="price" name="gia_khuyen_mai" placeholder="Nhập giá khuyến mãi sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Số lượng</label>
                                        <input type="number" class="form-control" id="price" name="so_luong" placeholder="Nhập số lượng">
                                    </div>   
                                    <div class="form-group">
                                        <label for="price">Ngày nhập</label>
                                        <input type="date" class="form-control" id="price" name="ngay_nhap" placeholder="Nhập số lượng">
                                    </div>  
                                    <div class="form-group">
                                        <label for="price">Lượt xem</label>
                                        <input type="number" class="form-control" id="price" name="luot_xem" placeholder="Nhập lượt xem">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ảnh giới thiệu</label>
                                        <input type="file" multiple class="form-control" id="price" name="nhieu_anh[]" placeholder="">  
                                    </div>      
=======
                                    <div class="form-group">
                                        @csrf
                                        <label for="name">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="name" name="ten_san_pham" placeholder="Nhập tên sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Số lượng</label>
                                        <input type="number" class="form-control" id="price" name="so_luong" placeholder="Nhập giá sản phẩm">
                                    </div>  
                                    <div class="form-group">
                                        <label for="price">Giá sản phẩm</label>
                                        <input type="number" class="form-control" id="price" name="gia_san_pham" placeholder="Nhập giá sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Giá khuyến mãi</label>
                                        <input type="number" class="form-control" id="price" name="gia_khuyen_mai" placeholder="Nhập giá sản phẩm">
                                    </div>
                                       
                                    <div class="form-group">
                                        <label for="price">Ngày nhập</label>
                                        <input type="date" class="form-control" id="price" name="ngay_nhap" placeholder="Nhập giá sản phẩm">
                                    </div> 
                                    <div class="form-group">
                                        <label for="description">Mô tả sản phẩm</label>
                                        <textarea class="form-control" id="description" name="mo_ta" rows="3" placeholder="Nhập mô tả sản phẩm"></textarea>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                                    </div>
>>>>>>> kiệt:resources/views/admins/binhluan/them.blade.php
                            </div>
                        
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh mục sản phẩm</h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
<<<<<<< HEAD:resources/views/admins/sanphams/them.blade.php
                                        <option value="">Vui lòng chọn danh mục</option>
                                        <select class="custom-select rounded-0" id="product_type" name="danh_muc_id" style="width: 100%;">
                                            @foreach($danhmucs as $danhmuc)
                                            <option value="{{$danhmuc->id}}">{{$danhmuc->ten_danh_muc}}</option>
=======
                                        <select class="custom-select rounded-0" id="product_type" name="danh_muc_id" style="width: 100%;">
                                            @foreach ($listDanhMuc as $DanhMuc)
                                            <option value="{{$DanhMuc->id}}">{{$DanhMuc->ten_danh_muc}}</option>
>>>>>>> kiệt:resources/views/admins/binhluan/them.blade.php
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            
                        
                    </div>
                    
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Ảnh đại diện</h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <label class="" style="cursor: pointer; width: 200px; height: 200px;" for="avatar">
                                            <img id="image_san_pham" style="width: 100%; height: 100%; object-fit: scale-down;" class="render_image" src="https://static.vecteezy.com/system/resources/previews/004/141/669/original/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg" alt="">
                                        </label>
<<<<<<< HEAD:resources/views/admins/sanphams/them.blade.php
                                        <input type="file"  id="avatar" name="hinh_anh" style="display: none;" onchange="handleCustomImage(event)">
=======
                                        <input type="file" id="avatar" name="link_anh" style="display: none;" onchange="handleCustomImage(event)">
>>>>>>> kiệt:resources/views/admins/binhluan/them.blade.php
                                    </div>
                                </div>
                               
                            </div>
                    </div>
                    
                </div>
        
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Trạng thái</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
<<<<<<< HEAD:resources/views/admins/sanphams/them.blade.php
                                    <select class="custom-select rounded-0" id="product_type" name="product_type" style="width: 100%;">
                                        <option value="">Trạng thái sản phẩm</option>
                                        <option value="0">Không kích hoạt</option>
                                        <option value="1">Kích hoạt</option>
=======
                                    <select class="custom-select rounded-0" id="product_type" name="trang_thai" style="width: 100%;">
                                        <option value="1">Còn hàng</option>
                                        <option value="0">Hết hàng</option>
                                
>>>>>>> kiệt:resources/views/admins/binhluan/them.blade.php
                                    </select>
                                </div>
                            </div>
                           
                        </div>
                    
                </div>
                    
                </div>
            </div>
            </div>
         
        </form>
        </div>
       
 </div>
@endsection
@section("scripts")
<script src="{{asset('admins/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admins/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script>
    function handleCustomImage(event){
        const image_san_pham = document.getElementById('image_san_pham');
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function () {
                image_san_pham.src = reader.result;
                image_san_pham.style.display = 'block';
            }

            if (file) {
                reader.readAsDataURL(file);
            }
    }
</script>
@endsection