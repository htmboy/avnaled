<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aooled站群 | 新闻中心</title>
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
            <h1>新增文章
              @if($errors->any())
                <span style="color: red">
                {{$errors->first()}}
                </span>
              @endif
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/backstage/article">返回</a></li>
            </ol>
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
                <h3 class="card-title">填写新闻信息

                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                {{method_field('put')}}
                {{csrf_field()}}
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-1"></div>
                  <div class="col-sm-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">新闻标题</label>
                    <input type="text" name="title" value="{{$article->title}}" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label>新闻类目</label>
                    <select name="cat_id" class="custom-select">
                      @foreach($categories as $category)
                      <option value="{{$category->id}}" {{$category->id == $article->cat_id ? 'selected' : ''}}>{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>

                    <div class="form-group">
                      <label>作者</label>
                      <input type="text" name="author" value="{{$article->author}}" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>点击数</label>
                      <input type="text" name="clicks" value="{{$article->clicks}}" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>时间</label>
                      <input type="date" name="created_at" value="{{date('Y-m-d', strtotime($article->created_at))}}" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>seo标题</label>
                      <input type="text" name="seo_title" value="{{$article->seo_title}}" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>seo关键词</label>
                      <input type="text" name="seo_keywords" value="{{$article->seo_keywords}}" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>seo描述</label>
                      <textarea class="form-control" name="seo_description" rows="4">{{$article->seo_description}}</textarea>
                    </div>
                  </div>
                  <div class="col-sm-5">


                    <div class="form-group">
                      <label for="exampleInputFile">产品缩率主图</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="thumbnail" of="article" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">选择图片</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">说明</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-8">
                    <div class="input-group">
                      <img class="img-fluid pad" name="photo" src="/storage/{{$article->thumbnail}}" alt="Photo">
                    </div>
                    </div>
                      </div>

                  </div>
                  <div class="row">
                  <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                    <div class="form-group">
                        <label for="exampleInputPassword1">内容</label>
                        <script id="editor" name="content" style='width:100%;height:50rem;'>{!!$article->content!!}</script>
                    </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">保存</button>
                  <a href="/backstage/article" class="btn btn-default">取消</a>
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
<script src="/backstage/js/imgValidate.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>


<script src="/backstage/js/editor.js"></script>
</body>
</html>
