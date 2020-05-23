<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit" />
    <title>搜索_{{$word}}_澳镭工矿灯</title>
    <meta name="keywords" content="{{$word}},澳镭工矿灯" />
    <meta name="description" content="{{$word}}的搜索结果。" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link href="/avnaled/css/base.css" rel="stylesheet" />
    <script src="/avnaled/js/index.js"></script>
</head>
<body>
@include('avnaled.common.header')

<div class="page_banner">
        <img src="/avnaled/img/5795e3e9ce74a.jpg">
</div>
<!--banner-bar-->
<div class="page_search">
    <div class="content">
        <div class="home_ss_l">
            <span>当前位置：</span>
            <a href="">首页</a> » 站内搜索 » 关键词：{{$word}}</div>
        <div class="home_ss_r">
            <form name="searchForm" method="get" action="/avnaled/search.html/">
                <input type="text" onclick="this.value=''" name="word" class="inp01" value="{{$word}}" onfocus="if(this.value=='大荷水性漆'){this.value='';}"  onblur="if(this.value==''){this.value='led工矿灯';}" />
                <input type="submit" value="" class="inp02" />
            </form>
        </div>
    </div>
</div>
<!--page-search-->


<div class="content">
    <div class="right">
        <div class="pro_main">
            @if($articles->isEmpty())
                <div class="p45">暂无内容。</div>
            @else
            <div class="new2_wrap">



                @foreach($articles as $article)
                <div class="new2_con">
                    <a href="/avnaled/article/detail/{{$article->id}}.html" target="_blank" class="new2_img">
                        <img width="300"  src="/storage/{{$article->thumbnail}}">
                    </a>
                    <div class="new2_txt">
                        <h2><a href="/avnaled/article/detail/{{$article->id}}.html" target="_blank">{{$article->title}}</a></h2>
                        <p>{{mb_substr(strip_tags($article->content), 0, 100)}}</p>
                        <span><a href="/avnaled/article/detail/{{$article->id}}.html" class="btn_more">查看详情</a></span>
                    </div>
                </div>
                @endforeach

            </div>
            @endif
            {{$articles->appends(['word' => $word])->links('avnaled.common.pagination')}}
        </div>
    @include('avnaled.common.recommended')
    </div>
    @include('avnaled.common.leftBar')

</div>

@include('avnaled.common.footer')
<!--footer-->
<div id="roll" style="display:none"><div title="回到顶部" id="roll_top"></div></div>

<script type="text/javascript" src="/avnaled/js/nav.hover.js"></script>
</body>
</html>