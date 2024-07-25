@extends('layouts.admin')
@section("title")

@endsection
@section('head')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admins/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admins/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admins/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admins/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admins/dist/css/adminlte.min.css')}}">
@endsection
@section("content")
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            @session('message')
            <div class="alert alert-success">
                        {{session('message')}}
            </div>
            @endsession
            
          <h3 class="card-title">Danh sách sản phẩm</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
<<<<<<< HEAD:resources/views/admins/sanphams/danhsach.blade.php
          <a class="btn btn-primary" href="{{route("admin.sanpham.create")}}">Thêm mới sản phẩm</a>
=======
          <a class="btn btn-primary" href="{{route('sanpham.create')}}">Thêm mới sản phẩm</a>
          {{-- Hiển thị thông báo --}}
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
>>>>>>> kiệt:resources/views/admins/sanpham/danhsach.blade.php
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th></th>
              <th>STT</th>
              <th>Hình ảnh</th>
              <th>Tên sản phẩm</th>
              <th>Số lượng</th>           
              <th>Gía sản phẩm</th>       
              <th>Ngày nhập</th>
              <th>Mô tả</th>
              <th>Danh mục</th>
              <th>Trạng thái</th>
              <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
<<<<<<< HEAD:resources/views/admins/sanphams/danhsach.blade.php
                @foreach($data as $sanpham)
                <tr>
                    <td><input type="checkbox" value="{{$sanpham["id"]}}"></td>
                    <td>
                      <p class="mb-0">{{ $sanpham["ten_san_pham"]}}</p>
                      <span>Số lượng : <strong>{{ $sanpham["so_luong"] }}</strong></span>
      
                    </td>
                    <td>{{ $sanpham["mo_ta"] }}</td>
                    <td>
                      <p class="mb-0">Giá sp : {{ number_format($sanpham["gia_san_pham"],0,".","."). " đ" }}</p>
                      
                    </td>
                    <td>{{ $sanpham["ngay_nhap"] }}</td>
                    <td>{{ $sanpham["ten_danh_muc"] }}</td>
                    <td>{{ $sanpham["trang_thai"]  ? "Kích hoạt" :  "Không kích hoạt" }}</td>
                    <td>
                    <div style="display:flex; column-gap:5px">   
                        <a href="{{route("admin.sanpham.edit",$sanpham["id"])}}" class="btn btn-info">Sửa</a>
                      <form action="{{route("admin.sanpham.destroy",$sanpham["id"])}}" onsubmit='return confirm("Bạn chắc chắn muốn xóa chứ")' method="POST">
                        @csrf
                        @method("DELETE")
                        <button class=" btn btn-warning">Xóa</button>
                      </form>
                    </div>
                      
                     
                    </td>
                </tr>
             @endforeach
=======
              <tr>
                @foreach ($listSanPham as $index => $SanPham)
                <tr>
                      <td><input type="checkbox"></td>
                      <td>{{$index +1}}</td>
                      <td>
                        {{-- <img src="{{Storage::url($SanPham->link_anh)}}" alt=""> --}}
                      </td>
                      <td>{{$SanPham->ten_san_pham}}</td>
                      <td>{{$SanPham->so_luong}}</td>
                      <td>{{$SanPham->gia_san_pham}}</td>
                      <td>{{$SanPham->ngay_nhap}}</td>
                      <td>{{$SanPham->mo_ta}}</td>
                      <td>{{$SanPham->ten_danh_muc}}</td>
                      <td>{{$SanPham->trang_thai == 1 ? 'Còn hàng' : 'Hết hàng'}}</td>
                  <td>
                    <a href="{{route('sanpham.edit', $SanPham->id)}}" class="btn btn-info">Sửa</a>
                    <a href="" class="btn btn-warning">Xóa</a>
                  </td>
                </tr>
                @endforeach
              </tr>
              
                
>>>>>>> kiệt:resources/views/admins/sanpham/danhsach.blade.php
            </tbody>
          
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
@endsection
@section("scripts")
<script src="{{asset('admins/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admins/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- DataTables  & Plugins -->
<script src="{{asset('admins/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admins/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admins/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admins/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admins/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admins/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection