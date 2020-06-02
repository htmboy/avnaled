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
    <title>{{$title}}</title>
    <meta name="title" content="{{$title}}">
    <meta name="description" content="{{$description}}" />
    <meta name="keywords" content="{{$keywords}}" />
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

<div class="banner-sub img-center">
    @if($poster->exists)
        <img src="/storage/{{$poster->site}}" alt="{{$poster->alt}}" title="{{$poster->title}}">
    @else
        <img src="/pok/images/neiye.jpg">
    @endif
</div>
<div class="container clearfix">
    <div class="ct2-sd">

        @include('pok.common.recommendedProduct')
    </div>

    <div class="ct2-mn">
        <div class="position">当前位置： <a href='{{route('pok.index')}}' class=''>首页</a> &gt; <a href='{{route('pok.contact')}}'>联系我们</a></div>
        <div class="mn-box">
            <ul class="contact">
                <li><i class="iconfont icon-qq"></i>QQ客服：<a href="tencent://message/?uin={{$settings['qq']}}&Menu=yes">{{$settings['qq']}}</a></li>
                <li><i class="iconfont icon-tel"></i>联系电话：{{$settings['mobile']}}</li>
                <li><i class="iconfont icon-fax"></i>免费电话：{{$settings['free']}}</li>
                <li><i class="iconfont icon-email"></i>E-mail：{{$settings['email']}}</li>
                <li><i class="iconfont icon-dizhi"></i>地址：{{$settings['address']}}</li>
            </ul>
        </div>

    </div>
</div>

<br /><br /><br /><br /><br />

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