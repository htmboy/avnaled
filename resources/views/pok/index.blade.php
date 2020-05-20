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

        <div class="swiper-slide" style="background-image: url(/pok/images/banner.jpg);" onClick="window.open('/products/');"></div>
        <div class="swiper-slide" style="background-image: url(/pok/images/banner.jpg);" onClick="window.open('/products/');"></div>
    </div>

    <div class="swiper-pagination"></div>
</div>

@include('pok.common.search')

<div class="section bg1">
    <div class="container clearfix wow fadeInUp">
        <div class="in-prd-cate">
            <div class="tit">产品展示<small>PRODUCT CATEGORIES</small></div>
            <ul class="lanmu">
                <li><a href="/products/g.html">不锈钢管</a></li>
                <li><a href="/products/fg.html">不锈钢方管</a></li>
                <li><a href="/products/wfg.html">不锈钢无缝管</a></li>
                <li><a href="/products/304.html">304不锈钢管</a></li>
                <li><a href="/products/316l.html">316L不锈钢管</a></li>
                <li><a href="/products/310s.html">310S不锈钢管</a></li>

            </ul>
            <div class="zx">
                <p style="background-image: url(/pok/images/icon2.png);">微信号码：<strong> 712965082 </strong></p>
                <p style="background-image: url(/pok/images/icon3.png);">咨询热线：<strong> 136-2032-8609 </strong></p>
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

                            <li><div class="wrap"> <a href="/products/304.html" class="img-cover">
                                        <span style="background-image: url(/pok/images/p-1.jpg);"></span></a>
                                    <div class="text">
                                        <h4><a href="/products/304.html">304不锈钢管</a></h4>
                                        <p>
                                            <a id="contact_weixin" onclick="openWindow(this)" class="bt">立即咨询</a>
                                            <a href="/products/304.html" class="bt">查看详情</a> </p>
                                    </div></div>
                            </li>

                            <li><div class="wrap"> <a href="/products/316l.html" class="img-cover">
                                        <span style="background-image: url(/pok/images/p-2.jpg);"></span></a>
                                    <div class="text">
                                        <h4><a href="/products/316l.html">316L不锈钢管</a></h4>
                                        <p> <a id="contact_weixin" onclick="openWindow(this)" class="bt">立即咨询</a> <a href="/products/316l.html" class="bt">查看详情</a> </p>
                                    </div></div>
                            </li>

                            <li><div class="wrap"> <a href="/products/lsfg.html" class="img-cover">
                                        <span style="background-image: url(/pok/images/p-3.jpg);"></span></a>
                                    <div class="text">
                                        <h4><a href="/products/lsfg.html">不锈钢拉丝方管</a></h4>
                                        <p> <a id="contact_weixin" onclick="openWindow(this)" class="bt">立即咨询</a> <a href="/products/lsfg.html" class="bt">查看详情</a> </p>
                                    </div></div>
                            </li>

                            <li><div class="wrap"> <a href="/products/gyhg.html" class="img-cover">
                                        <span style="background-image: url(/pok/images/p-4.jpg);"></span></a>
                                    <div class="text">
                                        <h4><a href="/products/gyhg.html">不锈钢工业焊管</a></h4>
                                        <p> <a id="contact_weixin" onclick="openWindow(this)" class="bt">立即咨询</a> <a href="/products/gyhg.html" class="bt">查看详情</a> </p>
                                    </div></div>
                            </li>

                            <li><div class="wrap"> <a href="/products/wfg.html" class="img-cover">
                                        <span style="background-image: url(/pok/images/p-5.jpg);"></span></a>
                                    <div class="text">
                                        <h4><a href="/products/wfg.html">不锈钢无缝管</a></h4>
                                        <p> <a id="contact_weixin" onclick="openWindow(this)" class="bt">立即咨询</a> <a href="/products/wfg.html" class="bt">查看详情</a> </p>
                                    </div></div>
                            </li>

                            <li><div class="wrap"> <a href="/products/bg.html" class="img-cover">
                                        <span style="background-image: url(/pok/images/p-6.jpg);"></span></a>
                                    <div class="text">
                                        <h4><a href="/products/bg.html">不锈钢扁钢</a></h4>
                                        <p> <a id="contact_weixin" onclick="openWindow(this)" class="bt">立即咨询</a> <a href="/products/bg.html" class="bt">查看详情</a> </p>
                                    </div></div>
                            </li>

                        </ul>
                    </div>

                    <div id="light_weixin" class="white_content">
                        <img src='/pok/images/wechat.jpg' />
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
                    <p>佛山市裕成不锈钢有限公司是一家集生产、研发、销售于一体的不锈钢管专业生产企业，主营：316、316L、304、304L不锈钢管。</p>
                    <p>产品符合中国GB∕T 12771-2008、美国ASTM A312等规范，被广泛用于石油、造纸、化工、食品卫生、医疗、装饰傢俱等工程，产品遍布中国各大中城市及世界各国。</p>
                    <p>公司以“质量至上、诚信为本”的宗旨，以出众的质量、优惠的价格、优质的服务与广大新老客户合作双赢，共同走向成功！</p>
                    <a href="/about.html" class="more">&raquo; 查看详情</a> </dd>
            </dl>
        </div>
    </div>
</div>
<div class="section in-case">
    <div class="container wow fadeInUp">
        <div class="in-case-tit">工程案例</div>
        <ul class="list-2 clearfix">

            <li> <a href="/al/1.html">
                    <div class="img-cover"><span style="background-image: url(/pok/images/l-1.jpg);"></span></div> <div class="text">案例展示一</div> </a> </li>

            <li> <a href="/al/2.html">
                    <div class="img-cover"><span style="background-image: url(/pok/images/l-2.jpg);"></span></div> <div class="text">案例展示二</div> </a> </li>

            <li> <a href="/al/3.html">
                    <div class="img-cover"><span style="background-image: url(/pok/images/l-3.jpg);"></span></div> <div class="text">案例展示三</div> </a> </li>

            <li> <a href="/al/4.html">
                    <div class="img-cover"><span style="background-image: url(/pok/images/l-4.jpg);"></span></div> <div class="text">案例展示四</div> </a> </li>

        </ul>
        <div class="in-case-btn"> <a href="/al/">查看更多</a> </div>
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
                    <div class="in-news-tit"> <a href="/news/" class="more">MORE</a>
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
                                            <dt class="img-center"><a href="/news/1.html"><img src="/pok/images/p-3.jpg"></a></dt>
                                            <dd>
                                                <h4><a href="/news/1.html" >不锈钢焊管拉丝后要注意防锈</a></h4>
                                                <p>不锈钢焊管在使用时为了美观会使用拉丝、镜面抛光等工艺，这些都是对不锈钢焊管表面进行加工，这种加工工艺对不锈钢焊管表面有什么影响呢？...</p>
                                                <a href="/news/1.html" class="more">查看详情 &raquo;</a> </dd>
                                        </dl>

                                        <ul>
                                            <li><a href="/news/2.html"><div class="tel">316L不锈钢管为什么被广泛应用在海洋环境中？</div> <span> 2020-05-02</span></a> </li>
                                            <li><a href="/news/3.html"><div class="tel">怎样增强不锈钢管的耐腐蚀性？</div> <span> 2020-05-03</span></a> </li>
                                            <li><a href="/news/4.html"><div class="tel">不锈钢焊管和碳钢管的差别在哪里？</div> <span> 2020-05-04</span></a> </li>
                                            <li><a href="/news/5.html"><div class="tel">304L不锈钢管与304不锈钢管有什么不同？</div> <span> 2020-05-05</span></a> </li>
                                            <li><a href="/news/6.html"><div class="tel">304不锈钢焊管会有磁性吗？</div> <span> 2020-05-06</span></a> </li>
                                            <li><a href="/news/7.html"><div class="tel">如何去除不锈钢焊管切割时留下的毛刺？</div> <span> 2020-05-07</span></a> </li>
                                            <li><a href="/news/8.html"><div class="tel">304不锈钢管的强度和硬度</div> <span> 2020-05-08</span></a> </li>
                                            <li><a href="/news/9.html"><div class="tel">不锈钢焊管碳元素的特性</div> <span> 2020-05-09</span></a> </li>
                                        </ul>
                                    </div>

                                </div>


                                <div class="swiper-slide">
                                    <div class="in-news-list">

                                        <dl>
                                            <dt class="img-center"><a href="/news/10.html"><img src="/pok/images/p-2.jpg"></a></dt>
                                            <dd>
                                                <h4><a href="/news/10.html">说316L不锈钢焊管耐应力腐蚀</a></h4>
                                                <p>316L不锈钢焊管的耐腐蚀性优于其他材质的不锈钢管，具有优异的耐应力腐蚀破裂的能力...</p>
                                                <a href="/news/10.html" class="more">查看详情 &raquo;</a> </dd>
                                        </dl>

                                        <ul>
                                            <li><a href="/news/11.html"><div class="tel">不锈钢管在汽车行业中的应用</div> <span> 2020-05-11</span></a> </li>
                                            <li><a href="/news/12.html"><div class="tel">解析304不锈钢管和201不锈钢管的耐压区别</div> <span> 2020-05-12</span></a> </li>
                                            <li><a href="/news/13.html"><div class="tel">碳元素在304不锈钢管中有着至关重要的作用</div> <span> 2020-05-13</span></a> </li>
                                            <li><a href="/news/14.html"><div class="tel">怎样延长不锈钢管的使用寿命？</div> <span> 2020-05-14</span></a> </li>
                                            <li><a href="/news/15.html"><div class="tel">铜元素在201不锈钢管中的作用</div> <span> 2020-05-15</span></a> </li>
                                            <li><a href="/news/16.html"><div class="tel">201不锈钢管会生锈吗？</div> <span> 2020-05-16</span></a> </li>
                                            <li><a href="/news/17.html"><div class="tel">怎样处理不锈钢焊管表面的锈斑？</div> <span> 2020-05-17</span></a> </li>
                                            <li><a href="/news/18.html"><div class="tel">不锈钢盘管的退火处理需要注意什么？</div> <span> 2020-05-18</span></a> </li>

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
                    <div class="in-news-tit"> <a href="/wenti/" class="more">MORE</a> 常见问题 </div>

                    <div id="marquee">
                        <ul>
                            <li> <a href="/wenti/1.html"><h4>SUS304和316不锈钢哪个好</h4>
                                    <p>一般常用的是304，但特殊要求的才采用316，如是化学品盛装容器可选用316不锈钢... </p></a> </li>

                            <li> <a href="/wenti/2.html"><h4>2205和2507双相不锈钢板有什么区别</h4>
                                    <p>2507双相钢不锈钢是一种铁素体—奥氏体(双相)不锈钢,它综合了许多铁素体钢和奥氏体钢最有益的性能... </p></a> </li>

                            <li> <a href="/wenti/3.html"><h4>904l是什么材质</h4>
                                    <p>904L（N08904，1.4539）超级奥氏体不锈钢中含14.0-18.0%铬， 24.0-26.0%镍，4.5%钼... </p></a> </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('pok.common.links')

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