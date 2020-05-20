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

<div class="banner-sub img-center"> <img src="/pok/images/neiye.jpg"> </div>

<div class="container clearfix">
    <div class="ct2-sd">
        <div class="panel-sd">
            <div class="tit">关于我们</div>
            <ul class="lanmu">
                <li class="open active"> <a href="{{route('pok.introduction')}}">公司简介</a> </li>
                <li class=""> <a href="{{route('pok.history')}}">企业文化</a> </li>
            </ul>
        </div>

        <div class="panel-sd">
            <div class="tit">热销产品</div>
            <ul class="list-3">

                <li> <a href="/products/316l.html"> <div class="img-center"><img src="/pok/images/p-2.jpg"></div> <div class="text">316L不锈钢管</div></a> </li>
                <li> <a href="/products/304.html"> <div class="img-center"><img src="/pok/images/p-1.jpg"></div> <div class="text">304不锈钢管</div></a> </li>

            </ul>
        </div>

        <div class="panel-sd">
            <div class="tit">联系我们</div>
            <div class="contact-sd">
                <h4>佛山市裕成不锈钢有限公司</h4>
                <p>地址：广东省佛山市南海区罗村华南国际LED电光源灯饰城C区8路36~38栋-澳镭照明</p>
                <p>Q Q：755930694</p>
                <p>电话：189-2311-7087</p>
                <p>网址：{{route('pok.index')}}</p>
            </div>
        </div>
    </div>
    <div class="ct2-mn">
        <div class="position">当前位置： <a href='/' class=''>首页</a> &gt; <a href='{{route('pok.introduction')}}'>关于我们</a></div>
        <div class="mn-box">
            <div class="content-body">

                <p>佛山市裕成不锈钢有限公司是一家集生产、研发、销售于一体的不锈钢管生产企业，主营：316、316L、304、304L、310S等材质。</p>
                <p>产品符合中国GB∕T 12771-2008、美国ASTM A312等规范，被广泛用于石油、造纸、化工、食品卫生、医疗、装饰傢俱等工程，产品遍布中国各大中城市及世界各国。</p>
                <p>公司以“质量至上、诚信为本”的宗旨，以出众的质量、优惠的价格、优质的服务与广大新老客户合作双赢，共同走向成功！</p>
                <img src="/pok/images/p-9.jpg" />

            </div>
        </div>
    </div>
</div>

@include('pok.common.footer')

</body>
</html>