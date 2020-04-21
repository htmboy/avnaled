<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Blank Page</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="pro_id" content="{{ $pro_id }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backstage/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/backstage/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="/backstage/webuploader/webuploader.css">
  <link rel="stylesheet" href="/backstage/css/productGalleryAdd.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
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
            <h1>添加图片</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/backstage/product/gallery/{{$pro_id}}">返回</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div id="uploader" class="wu-example">
                <div class="queueList">
                  <div id="dndArea" class="placeholder">
                    <div id="filePicker" class="webuploader-container">
                      <div class="webuploader-pick">点击选择图片</div>
                      <div id="rt_rt_1e6bl0ubk1uro1sao1madn3m1lh81" style="position: absolute; inset: 0px auto auto 448px; width: 168px; height: 44px; overflow: hidden;">
                        <input type="file" name="file" class="webuploader-element-invisible" multiple="multiple" accept="image/*">
                        <label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"></label>
                      </div>
                    </div>
                    <p>或将照片拖到这里，单次最多可选10张</p>
                  </div>
                  <ul class="filelist"></ul></div>
                <div class="statusBar" style="display:none;">
                  <div class="progress" style="display: none;">
                    <span class="text">0%</span>
                    <span class="percentage" style="width: 0%;"></span>
                  </div><div class="info">共0张（0B），已上传0张</div>
                  <div class="btns">
                    <div id="filePicker2" class="webuploader-container">
                      <div class="webuploader-pick">继续添加</div>
                      <div id="rt_rt_1e6bl0ubu1kgm1bafll4nur6o76" style="position: absolute; top: 0px; left: 0px; width: 1px; height: 1px; overflow: hidden;">
                        <input type="file" name="file" class="webuploader-element-invisible" multiple="multiple" accept="image/*">
                        <label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"></label>
                      </div>
                    </div>
                    <div class="uploadBtn state-pedding">开始上传</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

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
<!-- AdminLTE App -->
<script src="/backstage/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/backstage/webuploader/webuploader.js"></script>
<script src="/backstage/js/productGalleryAdd.js"></script>
</body>
</html>
