<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit" />
    <title>水性漆常见问题及解决办法_大荷水性漆</title>
    <meta name="keywords" content="大荷科技,水性漆常见问题,水性漆,大荷漆" /><meta name="description" content="大荷科技专注水性漆核心技术，拥有10多年市场应用经验,专业解决水性漆各种常见问题：如水性漆工艺流程及施工注意事项、日常养护翻新、调色配色等。服务热线:400-118-1123." /><link href="/Template/default/Public/css/base.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" />
    <link href="/spectacle/css/base.css" rel="stylesheet">
    <script src="/spectacle/js/index.js"></script>
</head><body>
@include('spectacle.common.header')

<div class="page_banner"><a href="http://www.dhq898.com/help"><img src="/spectacle/img/5795e3e9ce74a.jpg"></a></div>
<!--banner-bar-->
@include('spectacle.common.search')
<!--page-search-->


<div class="content">
    <div class="right">
        <div class="pro_main">
            <div class="new2_wrap">
                @foreach($cases as $case)
                <div class="new2_con">
                    <a href="/spectacle/article/{{$case->id}}.html" target="_blank" class="new2_img">
                        <img src="/storage/{{$case->thumbnail}}" width="200" height="150">
                    </a>
                    <div class="new2_txt">
                        <h2><a href="/spectacle/article/{{$case->id}}.html" target="_blank">{{$case->title}}</a></h2>
                        <p>{{mb_substr(strip_tags($case->content), 0, 130)}}</p>
                        <span><h3><a href="/spectacle/article/{{$case->id}}.html" class="btn_more">查看详情</a></h3></span>
                    </div>
                </div>
                @endforeach
            </div>
            <!--第二种样式横排图文-->
            {{$cases->links('spectacle.common.pagination')}}
        </div>
        <!--以下是热门产品以及推荐资讯-->
        <div class="RandomNews">
            <h3 class="diysr"> 热门产品 <i> / Hot Products</i>
                <div class="line"></div>
            </h3>
            <div class="news_random">
                @foreach($recommend)
                <div class="hot_pro">
                    <div class="hot_img">
                        <a href="/sxmqq/hbmqsxmqq.html" target="_blank">
                            <img src="/spectacle/img/thumb_5a59ee479b298.jpg">
                        </a>
                    </div>
                    <div class="hot_name">
                        <a href="/sxmqq/hbmqsxmqq.html" target="_blank">皓白面漆 水性木器漆</a>
                    </div>
                </div>
                @endforeach
                <div class="hot_pro">
                    <div class="hot_img"><a href="/sxmqq/tqmqsxmqq.html" target="_blank"><img src="/spectacle/img/thumb_5a59ee5a52aed.jpg"></a></div>
                    <div class="hot_name"><a href="/sxmqq/tqmqsxmqq.html" target="_blank">特清面漆 水性木器漆</a></div>
                </div>
                <div class="hot_pro">
                    <div class="hot_img"><a href="/sxqmq/xqjjwqmq.html" target="_blank"><img src="/spectacle/img/thumb_5a61c15202888.JPG"></a></div>
                    <div class="hot_name"><a href="/sxqmq/xqjjwqmq.html" target="_blank">消醛净 净味墙面漆</a></div>
                </div>
            </div>
        </div>
        <!--hot-pro-->
        <div class="RandomNews">
            <h3 class="diysr"> 推荐资讯 <i> / Recommended News</i>
                <div class="line"></div>
            </h3>
            <div class="news_random news_random_ new-s">
                <dl>
                    <dt><a href="/help/20200424-888.html" target="_blank"><img src="/spectacle/img/5ea29ccb5076d.jpg" alt="家具漆开放效果和封闭效果有何区别" />
                            <p>家具漆开放效果和封闭效果有何区别</p>
                        </a></dt>
                    <dd>
                        <p>家具漆开放效果和封闭效果有何区别</p>
                        <span>我们都知道，家具漆是家具生产工艺中常见的一种工艺，在给房子装修时，家具漆是必不可少的一种材料。但家具漆有很多种效果，开放式和封闭式是常见的两种，很多朋友不知道两者的区别在哪，今天，小编就为大家详细介绍一下。</span> <a href="/help/20200424-888.html" target="_blank">【更多详情】</a> </dd>
                </dl>
                <ul>
                    <li class="fr"> <span class="fr">2020-04-22</span> <a target="_blank" href="/help/20200422-887.html">【刷漆技巧】木器漆怎样涂刷才更显光滑？</a> </li>
                    <li class="fl"> <span class="fr">2020-04-21</span> <a target="_blank" href="/alzs/20200421-886.html">「和风煦日」阳明山庄经典美式（三米家居设计）</a> </li>
                    <li class="fr"> <span class="fr">2020-04-20</span> <a target="_blank" href="/help/20200420-885.html">实木油漆翻新家具容易出现哪些问题</a> </li>
                    <li class="fl"> <span class="fr">2020-04-17</span> <a target="_blank" href="/help/20200417-884.html">涂刷木器漆时如何处理板材基层？</a> </li>
                    <li class="fr"> <span class="fr">2020-04-16</span> <a target="_blank" href="/help/20200416-883.html">家具油漆对人体都有哪些危害</a> </li>
                    <li class="fl"> <span class="fr">2020-04-15</span> <a target="_blank" href="/help/20200415-882.html">解析：双组份水性漆所具备的优缺点</a> </li>
                    <li class="fr"> <span class="fr">2020-04-14</span> <a target="_blank" href="/alzs/20200414-881.html">「温润如歌」凯旋城休闲北欧（三米家居设计）</a> </li>
                    <li class="fl"> <span class="fr">2020-04-13</span> <a target="_blank" href="/help/20200413-880.html">实木家具刷水性木器漆的作用</a> </li>
                    <li class="fr"> <span class="fr">2020-04-11</span> <a target="_blank" href="/help/20200411-879.html">实木家具选择水性漆更环保</a> </li>
                    <li class="fl"> <span class="fr">2020-04-10</span> <a target="_blank" href="/help/20200410-878.html">怎么辨别水性木器漆是否刷得完美？</a> </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <!--hot-news-->

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