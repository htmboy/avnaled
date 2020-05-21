

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
    <title>企业文化</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
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

<div class="banner-sub img-center"> <img src="images/neiye.jpg"> </div>

<div class="container clearfix">
    <div class="ct2-sd">
        <div class="panel-sd">
            <div class="tit">关于我们</div>
            <ul class="lanmu">
                <li class=""> <a href="/about.html">公司简介</a> </li>
                <li class="open active"> <a href="/wenhua.html">企业文化</a> </li>
            </ul>
        </div>

        @include('pok.common.recommendedProduct')
    </div>
    <div class="ct2-mn">
        <div class="position">当前位置： <a href='/' class=''>首页</a> &gt; <a href='/about.html'>关于我们</a></div>
        <div class="mn-box">
            <div class="content-body">

                <p>企业文化将是未来企业发展的原动力，是我们赖以成长的无尽源泉。</p>

                <p>一个企业要发展壮大、长盛不衰，先要有强大的企业文化，文化是企业经营的源头。</p>

                <p>★服务——贴心</p>

                <p>我们不仅为针对客户提供超值的售前售后服务，还将为客户提供理念服务，从而与客户形成战略伙伴关系；</p>

                <p>★制造——精心</p>

                <p>质量是产品之本，我们决不容许任何有瑕玭的产品出厂，优品意识已经渗透到每一个员工的内心之中；</p>

                <p>★价格——称心</p>

                <p>我们崇尚价值，产品的性价比是价值的重要体现，我们为客户提供的是适合他们需求具有良好价值的产品。</p>

                <p><img src="/uploads/wenhua.png"></p>

                <br /><br />

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

</body>
</html>
