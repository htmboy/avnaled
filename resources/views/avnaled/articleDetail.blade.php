
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

<div class="page_banner"></div>
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
                                    <a href="/avnaled/article/list.html" title="返回列表" target="_blank">
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
                            @if($last_next[1])
                            <a href="/avnaled/article/detail/{{$last_next[1]->id}}.html">{{$last_next[1]->title}}</a>
                                @else
                            没有了
                                @endif
                        </span>
                        <span>上一篇：
                            @if($last_next[0])
                                <a href="/avnaled/article/detail/{{$last_next[0]->id}}.html">{{$last_next[0]->title}}</a>
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

                    <li{{$key<3?' class=cur':''}}><h4><a href="/avnaled/article/detail/{{$value->id}}.html" target="_blank">{{$value->title}}</a></h4></li>
                    @endforeach

                </ul>
                <h3 class="t03 new_third"><a href="/news">最新资讯文章</a></h3>
                <ul class="n_rt_ul" id="cntrLastArticle">
                    @foreach($article_recommends as $key => $value)
                    <li{{$key<3?' class=cur':''}}><h4><a href="/avnaled/article/detail/{{$value->id}}.html" target="_blank">{{$value->title}}</a></h4></li>
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

<div class="footer">
    <div class="foot">
        <div class="foot_t"><ul class="foot_link" style="width:118px"><h3>产品系列</h3><li><a href="/sxmqq/">水性木器漆</a></li><li><a href="/sxqmq/">墙面乳胶漆</a></li><li><a href="/sxdbq/">水性地板漆</a></li><li><a href="/sxhwmq/">户外木器漆</a></li></ul><ul class="foot_link" style="width:118px"><h3>招商加盟</h3><li><a href="/jmys.html">加盟优势</a></li><li><a href="/jmtj.html">加盟条件</a></li><li><a href="/jmlc.html">加盟流程</a></li><li><a href="/jmjz/">客户见证</a></li></ul><ul class="foot_link" style="width:118px"><h3>大荷品牌</h3><li><a href="/gsjjz.html">关于大荷</a></li><li><a href="/fzlc.html">发展历程</a></li><li><a href="/dhkx">大荷快讯</a></li><li><a href="/qiyewenhua">企业文化</a></li></ul><div class="foot_code" style="width:490px"><ul class="code">
                    <li>
                        <img src="/avnaled/img/20160724234311_72454.gif" width="80" height="80" alt="大荷漆" title="大荷漆" align /><em>微信公众号</em>
                    </li>
                    <li>
                        <img src="/avnaled/img/20160724234422_63481.jpg" alt="大荷水性漆" title="大荷水性漆" width="80" height="80" align="" /><em>手机客户端</em>
                    </li>
                </ul>
                <p>
                    服务热线：400 118 1123
                </p>
                <p class="p04">
                    公司地址：深圳罗湖区梨园路东583号
                </p>
                <p class="p02">
                    公司传真：0755-8243 8377
                </p>
                <p class="p03">
                    总经理信箱：zkhotline@vip.sina.com
                </p></div></div>
        <div class="copyright">版权所有 &copy;2016 深圳市大荷科技有限公司, All Rights Reserved. &nbsp;备案号: <a href="http://www.beian.miit.gov.cn" title="粤ICP备10222602号-2" target="_blank" rel="nofollow">粤ICP备10222602号-2</a> <a href="/sitemap.html">网站地图</a> <span style="white-space:normal;"> </span><span style="white-space:normal;"></span></div>
    </div>
</div>
<!--footer-->
<div id="roll" style="display:none"><div title="回到顶部" id="roll_top"></div></div>

<script type="text/javascript" src="/avnaled/js/nav.hover.js"></script>
</body>

</html>