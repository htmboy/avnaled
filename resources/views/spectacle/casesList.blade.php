<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit" />
    <title>{{$title}}</title>
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="description" content="{{$description}}" />
    <link href="/Template/default/Public/css/base.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" />
    <link href="/spectacle/css/base.css" rel="stylesheet">
    <script src="/spectacle/js/index.js"></script>
</head>
<body>
@include('spectacle.common.header')

<div class="page_banner">
    <img src="/spectacle/img/5795e3e9ce74a.jpg" alt="工矿灯品牌">
</div>
<!--banner-bar-->
@include('spectacle.common.search')
<!--page-search-->

<div class="content">
    <div class="right">
        <div class="pro_main">
            <div class="new2_wrap">
                @foreach($articles as $article)
                <div class="new3_con">
                    <div class="new3_img">
                        <a href="/spectacle/article/detail/{{$article->id}}.html" target="_blank">
                            <img src="/storage/{{$article->thumbnail}}">
                        </a>
                    </div>
                    <div class="new3_name">
                        <a href="/spectacle/article/detail/{{$article->id}}.html" target="_blank" looyu_bound="1">
                            {{$article->title}}
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <!--第二种样式横排图文-->
            {{$articles->links('spectacle.common.pagination')}}
        </div>
        <!--以下是热门产品以及推荐资讯-->
        @include('spectacle.common.recommended');

        <!--hot end-->
    </div>
    @include('spectacle.common.leftBar')

</div>

@include('spectacle.common.footer')
<!--footer-->
<div id="roll" style="display:none"><div title="回到顶部" id="roll_top"></div></div>

<script type="text/javascript" src="/spectacle/js/nav.hover.js"></script>
</body>
</html>