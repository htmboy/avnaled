<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aooled站群 | 产品中心</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backstage/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/backstage/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/backstage/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backstage/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('backstage.common.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('backstage.common.sidebar')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>产品列表</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="btn-group">
                @foreach($categories as $category)
                  <a href="/backstage/product?cat={{$category->id}}" class="btn btn-info btn-sm">{{$category->name}}</a>
                @endforeach
                <a href="/backstage/product" class="btn btn-info btn-sm">所有</a>
              </div>
                <div class="card-tools">
                    <a href="/backstage/product/add" class="btn btn-block btn-primary btn-sm">新增</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>id</th>
                  <th>类目</th>
                  <th>标题</th>
                  <th>编号</th>

                  <th>瓦数</th>
                  <th>是否显示</th>
                  <th width="80px">排序</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr id="{{$product->id}}" of="product">
                  <td>{{$product->id}}</td>
                  <td>{{$product->category->name}}</td>
                  <td>{{$product->title}}</td>
                  <td>{{$product->number}}</td>
                  <td>{{$product->watts}}</td>

                  <td class="is_show">
                    <input type="checkbox" name="is_show" {{$product->is_show?'checked':''}} data-bootstrap-switch>
                  </td>
                  <td class="sort" old="{{$product->sort}}">
                    <input type="text" name="sort" value="{{$product->sort}}" class="form-control">
                  </td>
                  <td>
                    <a href="/backstage/product/{{$product->id}}/edit">编辑</a>
                    <a href="/backstage/product/{{$product->id}}/del">删除</a>
                    <a href="/backstage/product/gallery/{{$product->id}}">图片</a>
                  </td>
                </tr>
                @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
            {{$products->appends($cat)->links('backstage/common/artProPagination')}}

          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.4
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/backstage/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/backstage/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/backstage/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/backstage/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/backstage/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/backstage/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/backstage/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="/backstage/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/backstage/dist/js/demo.js"></script>
<!-- page script -->
<script src="/backstage/js/product.js"></script>
<script src="/backstage/js/listview.js"></script>
<script>
  $(function () {
    $('#example1').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $(function () {
    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</body>
</html>
