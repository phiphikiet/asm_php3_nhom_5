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
        <form action="{{route('binhluan.update', $binhluan->id)}}" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin bình luận</h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @csrf
                                        @method('PUT')
                                        <label for="name">Tên tài khoản</label>
                                        <input type="text" class="form-control" name="tai_khoan_id" value="{{$binhluan->tai_khoan_id}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Tên sản phẩm</label>
                                        <input type="text" class="form-control" name="san_pham_id" value="{{$binhluan->san_pham_id}}" disabled>
                                    </div>  
                                    <div class="form-group">
                                        <label for="price">Nội dung</label>
                                        <input type="text" class="form-control" name="noi_dung" value="{{$binhluan->noi_dung}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Thời gian</label>
                                        <input type="text" class="form-control" name="thoi_gian" value="{{$binhluan->thoi_gian}}" disabled>
                                    </div>
                                       
                                    <div class="form-group">
                                        <label class="form-lable" for="price">Trang thái</label>
                                        <select name="trang_thai" class="form-control">
                                            <option value="0" {{ $binhluan->trang_thai == '0' ? 'selected' : '' }}>Ẩn</option>
                                            <option value="1" {{ $binhluan->trang_thai == '1' ? 'selected' : '' }}>Hiển thị</option>
                                        </select>
                                    </div> 
                                    
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    </div>
                            </div>
                        
                    </div>
                </div>
                </div>
            </div>
            {{-- <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh mục sản phẩm</h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="custom-select rounded-0" id="product_type" name="danh_muc_id" style="width: 100%;">
                                            @foreach ($listDanhMuc as $DanhMuc)
                                            <option value="{{$DanhMuc->id}}">{{$DanhMuc->ten_danh_muc}}</option>
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
                                        <input type="file" id="avatar" name="link_anh" style="display: none;" onchange="handleCustomImage(event)">
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
                                    <select class="custom-select rounded-0" id="product_type" name="trang_thai" style="width: 100%;">
                                        <option value="1">Còn hàng</option>
                                        <option value="0">Hết hàng</option>
                                
                                    </select>
                                </div>
                            </div>
                           
                        </div>
                    
                </div>
                    
                </div>
            </div> --}}
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