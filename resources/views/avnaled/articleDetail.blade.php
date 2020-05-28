
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit" />
    <title>{{$article->seo_title}}</title>
    <meta name="keywords" content="{{$article->seo_keywords}}" />
    <meta name="description" content="{{$article->seo_description}}" /><link href="/avnaled/css/base.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" />
    <!--[if IE 9]>
    <link href="/avnaled/css/ie9.css" rel="stylesheet">
    <![endif]-->
    <!--[if lt IE 9]>
    <link href="/avnaled/css/ie8.css" rel="stylesheet">
    <script src="/avnaled/js/html5shiv.min.js"></script>
    <![endif]-->
    <script src="/avnaled/js/index.js"></script>
</head>
<body>
@include('avnaled.common.header')

<div class="page_banner">
    @if($poster->exists)
        <img src="/storage/{{$poster->site}}" alt="{{$poster->alt}}">
    @else
        <img src="/avnaled/img/5795e3e9ce74a.jpg" alt="{{$article->seo_keywords}}">
    @endif
</div>
<!--banner-bar-->
@include('avnaled.common.search')
<!--page-search-->


<div class="content">
    <div class="right5">
        <div class="left2">
            <div class="left2_main">
                <div class="n_info_con" id="printableview">
                    <h1>{{$article->title}}</h1>
                    <div class="info_con_tit">
                        <div class="info_con_tit">
                            <div class="n_tit">
                                <span class="fr" style="margin:0px;">
                                    <a href="{{route('avnaled.article')}}" title="返回列表" target="_blank">
                                        <img src="/avnaled/img/article_btn.gif" alt="返回列表">
                                    </a>
                                </span>
                                <span>来源：{{$article->author}}</span>
                                <span>浏览：
                                    <span id="cntrHits">{{$article->clicks}}</span>
                                </span>
                                <span>发布日期：{{date('Y-m-d', strtotime($article->created_at))}}【<a href="javascript:;" onclick="ChangeFontSize(this,'16px')">大</a>
                                    <a class="cur" href="javascript:;" onclick="ChangeFontSize(this,'14px')">中</a>
                                    <a href="javascript:;" onclick="ChangeFontSize(this,'12px')">小</a>】
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="cntrBody">
                        {!! $article->content !!}
                    </div>
                    <div class="clear"></div>
                    <div class="gduo" id="gduo">
                        <span>下一篇：
                            @if($article->previousItem())
                            <a href="{{route('avnaled.art_detail', ['article' => $article->previousItem()->id])}}">{{$article->previousItem()->title}}</a>
                                @else
                            没有了
                                @endif
                        </span>
                        <span>上一篇：
                            @if($article->nextItem())
                                <a href="{{route('avnaled.art_detail', ['article' => $article->nextItem()->id])}}">{{$article->nextItem()->title}}</a>
                            @else
                                没有了
                            @endif
                        </span>
                    </div>

                    @include('avnaled.common.recommendedArticle')

                </div>
            </div>
        </div>

        <div class="right2">
            <div class="right2_main">
                <h3 class="t03 new_two"><a href="javascript:;">相关行业新闻</a></h3>
                <ul class="n_rt_ul">
                    @foreach($related as $key => $value)

                    <li{{$key<3?' class=cur':''}}><h4><a href="{{route('avnaled.art_detail', ['article' => $value->id])}}" target="_blank">{{$value->title}}</a></h4></li>
                    @endforeach

                </ul>
                <h3 class="t03 new_third"><a href="javascript:;">最新资讯文章</a></h3>
                <ul class="n_rt_ul" id="cntrLastArticle">
                    @foreach($article_recommends as $key => $value)
                    <li{{$key<3?' class=cur':''}}><h4><a href="{{route('avnaled.art_detail', ['article' => $value->id])}}" target="_blank">{{$value->title}}</a></h4></li>
                    @endforeach
                </ul>
            </div>
            <div class="clear"></div>
        </div>

        <script type="text/javascript">
            function ChangeFontSize(b, a) {
                $(b).addClass("cur").siblings("a").removeClass("cur");
                $j("cntrBody").css("font-size", a).find("*").css("font-size", a)
            }
        </script>
    </div>
</div>
<!--第二种内容详细end-->

@include('avnaled.common.footer')
<!--footer-->
<div id="roll" style="display:none"><div title="回到顶部" id="roll_top"></div></div>

<script type="text/javascript" src="/avnaled/js/nav.hover.js"></script>
</body>

</html>