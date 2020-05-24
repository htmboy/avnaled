<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta name="applicable-device" content="pc">
    <meta name="MobileOptimized" content="width"/>
    <meta name="HandheldFriendly" content="true"/>
    <title>{{$title}}</title>
    <meta name="description" content="{{$description}}" />
    <meta name="keywords" content="{{$keywords}}" />
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/pok/css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/pok/css/swiper.min.css" />
    <link rel="stylesheet" type="text/css" href="/pok/css/eyou.css" />
    <script type="text/javascript" src="/pok/js/jquery.min.js"></script>
    <script type="text/javascript" src="/pok/js/wow.min.js"></script>
    <script type="text/javascript" src="/pok/js/swiper.min.js"></script>
    <script type="text/javascript" src="/pok/js/eyou.js"></script>

    <style type="text/css">
        .black_overlay{
            display: none;
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            z-index:1001;
            -moz-opacity: 0.8;
            opacity:.80;
            filter: alpha(opacity=80);
        }
        .white_content {
            display: none;
            position: absolute;
            top: 10%;
            left: 30%;
            background-color: white;
            z-index:1002; /* 数字的大小指明了div的相对层，数字大的在上层 */
            overflow: auto;
        }
        .ewmwb{
            margin-top: 10px;
            font-size: 20px;
            text-align: center;
            color: #eb4124;
        }
    </style>

</head>

<body>

@include('pok.common.header')

<div class="swiper-container banner">

    <div class="swiper-wrapper">

        <div class="swiper-slide" style="background-image: url(/pok/images/banner.jpg);" onClick="window.open('{{route('pok.product')}}');"></div>
        <div class="swiper-slide" style="background-image: url(/pok/images/banner.jpg);" onClick="window.open('{{route('pok.product')}}');"></div>
    </div>

    <div class="swiper-pagination"></div>
</div>

@include('pok.common.search')

<div class="section bg1">
    <div class="container clearfix wow fadeInUp">
        <div class="in-prd-cate">
            <div class="tit">产品展示<small>PRODUCT CATEGORIES</small></div>
            <ul class="lanmu">
                @foreach($productCategories as $productCategory)
                <li><a href="{{route('pok.pro_category', ['product' => $productCategory->id])}}">{{$productCategory->name}}</a></li>
                @endforeach


            </ul>
            <div class="zx">
                <p style="background-image: url(/pok/images/icon2.png);">QQ 号码：<strong> 755930694 </strong></p>
                <p style="background-image: url(/pok/images/icon3.png);">咨询热线：<strong> 189-2311-7087 </strong></p>
            </div>
        </div>
        <div class="in-prd-con">
            <div class="in-prd-top"> <a href="/products/" class="more">MORE</a>
                <ul class="prd-menu clearfix">
                    <li><a href="javascript:;">最新产品</a> </li>
                </ul>
            </div>
            <div class="prd-con swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <ul class="list-1 clearfix">
                            @foreach($products as $product)
                            <li><div class="wrap"> <a href="{{route('pok.product', ['product' => $product->id])}}" class="img-cover">
                                        <span style="background-image: url(/storage/{{$product->thumbnail}});"></span></a>
                                    <div class="text">
                                        <h4><a href="{{route('pok.product', ['product' => $product->id])}}">{{$product->title}}</a></h4>
                                        <p>
                                            <a id="contact_weixin" onclick="openWindow(this)" class="bt">立即咨询</a>
                                            <a href="{{route('pok.pro_detail', ['product' => $product->id])}}" class="bt">查看详情</a> </p>
                                    </div></div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div id="light_weixin" class="white_content">
                        <img src='/pok/images/wechat.gif' />
                        <div class="ewmwb">扫描二维码，联系微信客服</div>
                    </div>
                    <div id="fade" class="black_overlay"  onClick="closeWindow()"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section bg2">
    <div class="container wow fadeInUp">
        <div class="in-about-tit">
            <div class="section-title"> 关于我们 <span>ABOUT US</span>
                <p><small>用心服务好每一个客户</small></p>
            </div>
        </div>
        <div class="in-about">
            <dl class="clearfix">
                <dt class="img-center"> <img src="/pok/images/about.jpg" alt="公司简介"> </dt>
                <dd>
                    <p>广东澳镭照明电器有限公司始创于2006年，是一家集LED工业照明灯具研发、生产、销售及LED工厂节能照明改造服务于一体的综合型照明企业。</p>
                    <p>14年来，澳镭照明已经在LED工业照明领域成功开发了150多款产品，其中LED工矿灯、LED投光灯、LED泛光灯、LED隧道灯、LED路灯等工业LED灯具均为澳镭的核心产品。</p>
                    <p>澳镭照明，14年来为中国工厂的节能照明改造事业贡献了一份坚实的企业力量，立志成为中国LED工业照明领域首选服务品牌。</p>
                    <a href="{{route('pok.introduction')}}" class="more">&raquo; 查看详情</a> </dd>
            </dl>
        </div>
    </div>
</div>
<div class="section in-case">
    <div class="container wow fadeInUp">
        <div class="in-case-tit">工程案例</div>
        <ul class="list-2 clearfix">
            @foreach($cases as $case)
            <li>
                <a href="{{route('pok.art_detail', ['article' => $case->id])}}">
                    <div class="img-cover">
                        <span style="background-image: url(/storage/{{$case->thumbnail}});"></span>
                    </div>
                    <div class="text">{{$case->title}}</div>
                </a>
            </li>
            @endforeach

        </ul>
        <div class="in-case-btn"> <a href="{{route('pok.cases')}}">查看更多</a> </div>
    </div>
</div>
<div class="section">
    <div class="container wow fadeInUp">
        <div class="section-title"> 新闻资讯 <span>NEWS</span>
            <p><small>信息时代，我们将实时更新新闻动态</small></p>
        </div>
        <div class="clearfix">
            <div class="in-news-left">
                <div class="in-news-box">
                    <div class="in-news-tit"> <a href="{{route('pok.art_category', ['articleCategory' => 2])}}" class="more">MORE</a>
                        <ul class="news-menu">
                            <li class="active"><a href="javascript:;">新闻资讯</a> </li>
                            <li><a href="javascript:;">行业资讯</a> </li>
                        </ul>
                    </div>
                    <div class="in-news-wrap">
                        <div class="news-con swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <div class="in-news-list">

                                        <dl>
                                            <dt class="img-center"><a href="{{route('pok.art_detail', ['article' => $conpany_news->first()->id])}}"><img src="/storage/{{$conpany_news->first()->thumbnail}}"></a></dt>
                                            <dd>
                                                <h4><a href="{{route('pok.art_detail', ['article' => $conpany_news->first()->id])}}" >{{$conpany_news->first()->title}}</a></h4>
                                                <p>{{Str::limit(strip_tags($conpany_news->first()->content), 200)}}</p>
                                                <a href="{{route('pok.art_detail', ['article' => $conpany_news->first()->id])}}" class="more">查看详情 &raquo;</a> </dd>
                                        </dl>

                                        <ul>
                                            @foreach($conpany_news as $conpany_new)
                                            <li>
                                                <a href="{{route('pok.art_detail', ['article' => $conpany_new->id])}}">
                                                    <div class="tel">{{$conpany_new->title}}</div>
                                                    <span>{{date('Y-m-d', strtotime($conpany_new->updated_at))}}</span>
                                                </a>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>

                                </div>


                                <div class="swiper-slide">
                                    <div class="in-news-list">

                                        <dl>
                                            <dt class="img-center"><a href="{{route('pok.art_detail', ['article' => $news->first()->id])}}"><img src="/storage/{{$news->first()->thumbnail}}"></a></dt>
                                            <dd>
                                                <h4><a href="{{route('pok.art_detail', ['article' => $news->first()->id])}}">{{$news->first()->title}}</a></h4>
                                                <p>{{Str::limit(strip_tags($news->first()->content), 200)}}</p>
                                                <a href="{{route('pok.art_detail', ['article' => $news->first()->id])}}" class="more">查看详情 &raquo;</a> </dd>
                                        </dl>

                                        <ul>
                                            @foreach($news as $new)
                                                <li>
                                                    <a href="{{route('pok.art_detail', ['article' => $new->id])}}">
                                                        <div class="tel">{{$new->title}}</div>
                                                        <span>{{date('Y-m-d', strtotime($new->updated_at))}}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="in-news-right">
                <div class="in-news-box">
                    <div class="in-news-tit"> <a href="{{route('pok.art_category', ['articleCategory' => 3])}}" class="more">MORE</a> 常见问题 </div>

                    <div id="marquee">
                        <ul>
                            @foreach($answers as $answer)
                            <li>
                                <a href="{{route('pok.art_detail', ['article' => $answer->id])}}">
                                    <h4>{{$answer->title}}</h4>
                                    <p>{{Str::limit(strip_tags($answer->content), 20)}}</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
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

<script type="text/javascript" src="/pok/js/jquery.kxbdmarquee.js"></script><script>

    var banner = new Swiper('.banner', {
        loop: true,
        slidesPerView: "auto",
        // loopedSlides: _this.bannerList.length,
        speed: 300,
        autoplay: {
            disableOnInteraction: false, //手动滑动之后不打断播放
            delay: 3000
        },
        observer: true, //监听，当改变swiper的样式（例如隐藏/显示）或者修改swiper的子元素时，自动初始化swiper。
        pagination: {
            el: ".swiper-pagination",
            clickable: true

        }

    });



    $('.nav li').eq(0).addClass('active');



    $('#marquee').kxbdMarquee({direction: 'up', isEqual: false, scrollDelay: 50});



    tabsSwiper('.prd-menu', '.prd-con');

    tabsSwiper('.news-menu', '.news-con');

    function tabsSwiper(menu, con) {

        var swiper = new Swiper(con, {

            speed: 500,

            spaceBetween: 20,

            on: {

                slideChangeTransitionStart: function () {

                    $(menu).find('li').eq(this.activeIndex).addClass('active').siblings().removeClass('active');

                }

            }

        });

        $(menu).on('click', 'li', function (e) {

            $(this).addClass('active').siblings().removeClass('active');

            swiper.slideTo($(this).index());

        });

    }

    new WOW().init();
</script>
<script  type="text/javascript">
    function openWindow(obj){
        var qq_or_weixin = "light_qq";
        switch(obj.id)
        {
            case 'contact_weixin':
                qq_or_weixin = "light_weixin";
                break;
            case 'contact_weixina':
                qq_or_weixin = "light_weixin";
                break;
        }
        document.getElementById(qq_or_weixin).style.display='block';
        document.getElementById('fade').style.display='block';
    }
    function closeWindow(){
        document.getElementById('light_weixin').style.display='none';
        document.getElementById('fade').style.display='none';
    }
</script>


</body>
</html>