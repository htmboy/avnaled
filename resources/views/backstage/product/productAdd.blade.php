<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backstage/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backstage/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="/backstage/ueditor/ueditor.config.js"></script>
    <script src="/backstage/ueditor/ueditor.all.min.js"></script>
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
            <h1>新增产品信息
              @if($errors->any())
                {{$errors->first()}}
              @endif
            </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">产品信息

                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-1"></div>
                  <div class="col-sm-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">产品名称</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label>产品分类</label>
                    <select name="cat_id" class="custom-select">
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                  </div>
                    <div class="row">

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>产品型号</label>
                        <input type="text" name="number" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>产品瓦数</label>
                        <input type="text" name="watts" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>产品尺寸</label>
                        <input type="text" name="size" class="form-control">
                      </div>
                      <!-- text input -->
                      <div class="form-group">
                        <label>产品颜色</label>
                        <input type="text" name="color" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>产品包装</label>
                        <input type="text" name="package" class="form-control">
                      </div>
                      <!-- text input -->
                      <div class="form-group">
                        <label>产品重量</label>
                        <input type="text" name="weight" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>输入电压</label>
                        <input type="text" name="voltage" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>照射角度</label>
                        <input type="text" name="angle" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>防水等级</label>
                        <input type="text" name="waterproof" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>使用寿命</label>
                        <input type="text" name="life" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>照射距离</label>
                        <input type="text" name="distance" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>外壳材质</label>
                        <input type="text" name="material" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>产品特性</label>
                        <input type="text" name="characteristic" class="form-control">
                      </div>
                    </div>
                    </div>
                  </div>
                    <div class="col-sm-1"></div>
                  <div class="col-sm-4">
                      <div class="row">
                      <div class="form-group">
                        <label for="exampleInputFile">产品缩率主图</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="thumbnail" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">选择图片</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">说明</span>
                          </div>
                        </div>
                      </div>

                        <div class="input-group">
                      <img class="img-fluid pad" src="/backstage/dist/img/photo2.png" alt="Photo">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                    <div class="form-group">
                        <label for="exampleInputPassword1">内容</label>
                        <script id="editor" name="content" type="text/plain">

                        </script>
                    </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">新增</button>
                  <a href="/backstage/product" class="btn btn-default">取消</a>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<!-- bs-custom-file-input -->
<script src="/backstage/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="/backstage/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/backstage/dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>


<script>
    var ue = UE.getEditor('editor');
</script>
</body>
</html>
