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
    <title>产品展示</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/pok/css/swiper.min.css" />
    <link rel="stylesheet" type="text/css" href="/pok/css/eyou.css" />
    <script type="text/javascript" src="/pok/js/jquery.min.js?"></script>
    <script type="text/javascript" src="/pok/js/swiper.min.js"></script>
    <script type="text/javascript" src="/pok/js/eyou.js"></script>
</head>
<body>

@include('pok.common.header')

@include('pok.common.search')

<div class="banner-sub img-center"> <img src="/pok/images/neiye.jpg"> </div>
<div class="container clearfix">
    <div class="ct2-sd ct2-sd-right">
        <div class="panel-sd">
            <div class="tit">产品展示</div>
            <ul class="lanmu">
                <li class=""> <a href="/products/fg.html">不锈钢方管</a> </li>
                <li class=""> <a href="/products/wfg.html">不锈钢无缝管</a> </li>
                <li class=""> <a href="/products/mxg.html">不锈钢毛细管</a> </li>
                <li class=""> <a href="/products/jxg.html">不锈钢矩形管</a> </li>

            </ul>
        </div>

        @include('pok.common.recommendedProduct')
    </div>
    <div class="ct2-mn ct2-mn-left">
        <div class="position">当前位置： <a href='/' class=''>首页</a> &gt; <a href='/products/'>产品展示</a></div>
        <div class="mn-box">
            <ul class="list-1 clearfix">

                @foreach($products as $product)
                <li>
                    <div class="wrap">
                        <a href="{{route('pok.pro_detail', ['product' => $product->id])}}" class="img-cover">
                            <span style="background-image: url(/storage/{{$product->thumbnail}});"></span>
                        </a>
                        <div class="text">
                            <h4><a href="{{route('pok.pro_detail', ['product' => $product->id])}}" >{{$product->title}}</a></h4>
                            <p> <a href="tencent://message/?uin=755930694&Menu=yes" target="_blank" class="bt">立即咨询</a>
                                <a href="{{route('pok.pro_detail', ['product' => $product->id])}}" class="bt">查看详情</a></p></div></div>
                </li>
                @endforeach

            </ul>
            {{$products->links('pok.common.pagination')}}
        </div>

        @include('pok.common.recommended')
    </div>
</div>

@include('pok.common.footer')

</body>
</html>
