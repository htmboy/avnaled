<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta name="applicable-device" content="pc,wap">
    <meta name="MobileOptimized" content="width"/>
    <meta name="HandheldFriendly" content="true"/>
    <title>{{$title}}</title>
    <meta name="title" content="{{$title}}">
    <meta name="description" content="{{$description}}" />
    <meta name="keywords" content="{{$keywords}}" />
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/pok/css/swiper.min.css" />
    <link rel="stylesheet" type="text/css" href="/pok/css/eyou.css" />
    <script type="text/javascript" src="/pok/js/jquery.min.js"></script>
    <script type="text/javascript" src="/pok/js/swiper.min.js"></script>
    <script type="text/javascript" src="/pok/js/eyou.js"></script>
</head>

<body>

@include('pok.common.header')

@include('pok.common.search')

<div class="banner-sub img-center">
    @if($poster->exists)
    <img src="/storage/{{$poster->site}}" alt="{{$poster->alt}}" title="{{$poster->title}}">
        @else
    <img src="/pok/images/neiye.jpg">
    @endif
</div>
<div class="container clearfix">
    <div class="ct2-sd">
        @include('pok.common.newsMenu')

        @include('pok.common.recommendedProduct')
    </div>
    <div class="ct2-mn">
        <div class="position">当前位置：
            <a href='{{route('pok.index')}}' class=''>首页</a> &gt;
            <a href='{{route('pok.article')}}'>新闻咨询 </a> &gt;
            <a href='{{route('pok.art_category', ['articleCategory' => $articles->first()->map_id])}}'>{{$articles->first()->getCategoryMap()[$articles->first()->map_id]}}</a>
        </div>
        <div class="mn-box">
            <ul class="list-4">
                @foreach($articles as $article)
                <li> <a href="{{route('pok.art_detail', ['article' => $article->id])}}">
                        <div class="more">查看详情</div>
                        <div class="date">
                            <strong>{!! date('d\<\/\s\t\r\o\n\g\>Y-m', strtotime($article->updated_at)) !!}
                        </div>
                        <div class="text">
                            <h4>{{$article->title}}</h4>
                            <p>{{Str::limit(strip_tags($article->content), 60)}}</p>
                        </div>
                    </a> </li>
                @endforeach

            </ul>
            {{$articles->links('pok.common.pagination')}}

        </div>
        @include('pok.common.recommended')
    </div>
</div>

@include('pok.common.footer')
<!-- 应用插件标签 start -->
<!-- 应用插件标签 end -->


<!--[if lt IE 9]>
<div class="notsupport">
    <h1>:( 非常遗憾</h1>
    <h2>您的浏览器版本太低，请升级您的浏览器</h2>
</div>
<![endif]-->

</body>
</html>