<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aooled站群 | 网址设置</title>
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
  <link rel="stylesheet" href="/backstage/css/global.css">
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
            <h1>页面设置
              <span class="feedback">
              @if($errors->any())
                {{$errors->first()}}
              @endif
              </span>
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
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">首页_SEO</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="post">
                {{csrf_field()}}
                <input type="hidden" name="key" value="index_seo">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">标题</label>
                    <input type="text" name="seo_title" value="{{explode("%/%", $index->value)[0]}}" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">关键词</label>
                    <input type="text" name="seo_keywords" value="{{explode("%/%", $index->value)[1]}}" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label>描述</label>
                    <textarea name="seo_description" class="form-control" rows="4">{{explode("%/%", $index->value)[2]}}</textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">提交</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">联系我们_SEO</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="post">
                {{csrf_field()}}
                <input type="hidden" name="key" value="contact_seo">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">标题</label>
                    <input type="text" name="seo_title" value="{{explode("%/%", $contact->value)[0]}}" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">关键词</label>
                    <input type="text" name="seo_keywords" class="form-control" value="{{explode("%/%", $contact->value)[1]}}" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label>描述</label>
                    <textarea name="seo_description" class="form-control" rows="4">{{explode("%/%", $contact->value)[2]}}</textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">提交</button>
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
  @include('backstage.common.footer')
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
