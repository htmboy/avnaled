<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit" />
    <title>{{$title}}</title>
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="description" content="{{$description}}" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link href="/avnaled/css/base.css" rel="stylesheet">
    <script src="/avnaled/js/index.js"></script>
</head><body>
@include('avnaled.common.header')

<div class="page_banner">
    @if($poster->exists)
        <img src="/storage/{{$poster->site}}" alt="{{$poster->alt}}">
    @else
        <img src="/avnaled/img/5795e3e9ce74a.jpg" alt="工矿灯品牌">
    @endif
</div>
<!--banner-bar-->
@include('avnaled.common.search')
<!--page-search-->


<div class="content">
    <div class="right">
        <div class="pro_main">
            <div class="new2_wrap">
                @foreach($articles as $article)
                <div class="new2_con">
                    <a href="{{route('avnaled.art_detail', ['article' => $article->id])}}" target="_blank" class="new2_img">
                        <img src="/storage/{{$article->thumbnail}}" width="150">
                    </a>
                    <div class="new2_txt">
                        <h2><a href="{{route('avnaled.art_detail', ['article' => $article->id])}}" target="_blank">{{$article->title}}</a></h2>
                        <p>{{mb_substr(strip_tags($article->content), 0, 130)}}</p>
                        <span><h3><a href="{{route('avnaled.art_detail', ['article' => $article->id])}}" class="btn_more">查看详情</a></h3></span>
                    </div>
                </div>
                @endforeach
            </div>
            <!--第二种样式横排图文-->
            {{$articles->links('avnaled.common.pagination')}}
        </div>
        <!--以下是热门产品以及推荐资讯-->
        @include('avnaled.common.recommended');

        <!--hot end-->
    </div>
    @include('avnaled.common.leftBar')

</div>

@include('avnaled.common.footer')
<!--footer-->
<div id="roll" style="display:none"><div title="回到顶部" id="roll_top"></div></div>

<script type="text/javascript" src="/avnaled/js/nav.hover.js"></script>
</body>
</html>