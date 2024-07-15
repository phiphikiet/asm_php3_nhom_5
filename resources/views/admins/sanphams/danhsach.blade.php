@extends('layouts.admin')
@section('title')
@endsection
@section('head')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admins/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admins/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admins/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admins/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admins/dist/css/adminlte.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách sản phẩm</h3>
                </div>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <!-- /.card-header -->
                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('sanphams.create') }}">Thêm mới sản phẩm</a>
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>Tên sản phẩm</th>
                              <th>Số lượng</th>
                              <th>Giá sản phẩm</th>
                              <th>Giá khuyến mãi</th>
                              <th>Ngày nhập</th>
                              <th>Mô tả</th>
                              <th>Danh mục</th>
                              <th>Trạng thái</th>
                              <th>Hành động</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($listSanPham as $sanPham)
                          <tr>
                              <td>{{$sanPham->ten_san_pham}}</td>
                              <td>{{$sanPham->so_luong}}</td>
                              <td>{{$sanPham->gia_san_pham}}</td>
                              <td>{{$sanPham->gia_khuyen_mai}}</td>
                              <td>{{$sanPham->ngay_nhap}}</td>
                              <td>{{$sanPham->mo_ta}}</td>
                              <td>{{$sanPham->danh_muc_id}}</td>
                              <td>{{$sanPham->trang_thai}}</td>
                              <td>
                                  <a href="{{ route('sanphams.edit', $sanPham->id) }}" class="btn btn-info">Sửa</a>
                                  <a href="" class="btn btn-warning">Xóa</a>
                              </td>
                          </tr>
                          @endforeach
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
@section('scripts')
    <script src="{{ asset('admins/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admins/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('admins/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admins/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admins/dist/js/demo.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
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
