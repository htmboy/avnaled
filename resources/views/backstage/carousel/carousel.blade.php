<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aooled站群 | 轮播图</title>
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
                <div class="card-tools">
                    <a href="{{route('carousels.create')}}" class="btn btn-block btn-primary btn-sm">新增</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>图片</th>
                  <th>标题</th>
                  <th>图片描述</th>
                  <th>链接</th>
                  <th>是否显示</th>
                  <th width="80px">排序</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($carousels as $carousel)
                <tr id="{{$carousel->id}}" of="carousel">
                  <td><img width="200" src="/storage/{{$carousel->site}}"></td>
                  <td>{{$carousel->title}}</td>
                  <td>{{$carousel->alt}}</td>
                  <td>{{$carousel->link}}</td>
                  <td class="is_show"><input type="checkbox" {{$carousel->is_show?'checked':''}} data-bootstrap-switch></td>
                  <td class="sort" old="{{$carousel->sort}}"><input type="text" name="sort" value="{{$carousel->sort}}" class="form-control"></td>
                  <td>
                    <a href="{{route('carousels.edit', ['carousel' => $carousel->id])}}">编辑</a>
                    <a href="javascript:void(0)" onclick="if(confirm('确定要删除此项吗？')) this.nextElementSibling.submit()">删除</a>
                    <form action="{{route('carousels.destroy', ['carousel' => $carousel->id])}}" method="post">
                      @method('delete')
                      {{csrf_field()}}
                    </form>
                  </td>
                </tr>
                @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
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
@include('backstage.common.footer')

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
