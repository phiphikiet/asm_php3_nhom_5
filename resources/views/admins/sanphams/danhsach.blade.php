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
          <h3 class="card-title">Danh sách sản phẩm</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <a class="btn btn-primary" href="">Thêm mới sản phẩm</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th></th>
              <th>Tên sản phẩm</th>
              <th>Mô tả</th>
              <th>Gía sản phẩm</th>
             
              <th>Danh mục</th>
              <th>Ngày nhập</th>
              <th>Trạng thái</th>
              <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
              <td><input type="checkbox"></td>
              <td>
                <p class="mb-0">Giày đá bóng loại 1</p>
                <span>Số lượng : <strong>2</strong></span>

              </td>
              <td></td>
              <td>
                <p class="mb-0">Giá sp : 40.000đ</p>
                
              </td>
              <td>Ngày nhập</td>
              <td>Danh mục</td>
              <td>Trạng thái</td>
              <td>
                <a href="" class="btn btn-info">Sửa</a>
                <a href="" class="btn btn-warning">Xóa</a>
              </td>
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