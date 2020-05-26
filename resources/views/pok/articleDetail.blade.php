<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta name="applicable-device" content="pc,wap">
    <meta name="MobileOptimized" content="width"/>
    <meta name="HandheldFriendly" content="true"/>
    <title>{{$article->title}}</title>
    <meta name="description" content="{{$article->seo_keywords}}" />
    <meta name="keywords" content="{{$article->seo_description}}" />
    <meta name="title" content="{{$article->seo_title}}" />
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/pok/css/swiper.min.css" />
    <link rel="stylesheet" type="text/css" href="/pok/css/eyou.css" />
    <script type="text/javascript" src="/pok/js/jquery.min.js"></script>
    <script type="text/javascript" src="/pok/js/swiper.min.js"></script>
    <script type="text/javascript" src="/pok/js/eyou.js"></script>
    <script type="text/javascript" src="/pok/js/view_arcrank.js"></script>
</head>
<body>

@include('pok.common.header')

@include('pok.common.search')

<div class="banner-sub img-center">
    @if($poster)
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
        <div class="position">当前位置： <a href='{{route('pok.index')}}' class=''>首页</a> &gt; <a href='{{route('pok.article')}}'>新闻咨询 </a> &gt;<a href='{{route('pok.art_category', ['articleCategory' => $article->map_id])}}' class=''>{{$article->getCategoryMap()[$article->map_id]}}</a> &gt;
            <a href="{{route('pok.art_detail', ['article' => $article->id])}}">{{$article->title}}</a></div>
        <div class="mn-box">
            <div class="content-title">
                <h1>{{$article->title}}</h1>
                <p>
                    <span>时间：{{date('Y-m-d', strtotime($article->updated_at))}}</span>
                    <span>作者：{{$article->author}}</span>
                    <span>点击：{{$article->clicks}}</span>
                </p>
            </div>
            <div class="content-body">
                {!! $article->content !!}
            </div>
            <ul class="content-exp">
                @if($article->previousItem())
                <li><span>上一篇：</span><a href='{{route('pok.art_detail', [$article->previousItem()->id])}}'>{{$article->previousItem()->title}}</a></li>
                @else
                    <li><span>上一篇：</span>没有了</li>
                @endif
                @if($article->nextItem())
                <li><span>下一篇：</span><a href='{{route('pok.art_detail', [$article->nextItem()->id])}}'>{{$article->nextItem()->title}}</a></li>
                    @else
                        <li><span>下一篇：</span>没有了</li>
                    @endif
            </ul>
        </div>
        @include('pok.common.recommended')

    </div>
</div>

@include('pok.common.footer')


</body>
</html>