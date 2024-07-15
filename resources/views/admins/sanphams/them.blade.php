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
        <form action="" method="POST">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin sản phẩm</h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Mô tả sản phẩm</label>
                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Nhập mô tả sản phẩm"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Giá sản phẩm</label>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Giá khuyến mãi</label>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Số lượng</label>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá sản phẩm">
                                    </div>   
                                    <div class="form-group">
                                        <label for="price">Lượt xem</label>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá sản phẩm">
                                    </div>     
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
                                        <select class="custom-select rounded-0" id="product_type" name="product_type" style="width: 100%;">
                                            <option value="">Chọn loại sản phẩm</option>
                                            <option value="1">Loại 1</option>
                                            <option value="2">Loại 2</option>
                                            <option value="3">Loại 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Thêm mới</button>
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
                                            <img style="width: 100%; height: 100%; object-fit: scale-down;" class="render_image" src="https://static.vecteezy.com/system/resources/previews/004/141/669/original/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg" alt="">
                                        </label>
                                        <input type="file" name="avatar" id="avatar" name="anh" style="display: none;" onchange="handleCustomImage(event)">
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
                                    <select class="custom-select rounded-0" id="product_type" name="product_type" style="width: 100%;">
                                        <option value="">Chọn loại sản phẩm</option>
                                        <option value="1">Loại 1</option>
                                        <option value="2">Loại 2</option>
                                        <option value="3">Loại  3</option>
                                    
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
            const file = event.target.files[0];
            const reader = new FileReader();
            if(reader){
                reader.onload = (event) => {
                    const img = document.querySelector('.render_image');
                    img.src = event.target.result;
                }
                reader.readAsDataURL(file);
            }
    }
</script>
@endsection