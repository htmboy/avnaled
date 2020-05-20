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

        <div class="panel-sd">
            <div class="tit">热销产品</div>
            <ul class="list-3">

                <li> <a href="/products/316.html"> <div class="img-center"><img src="/pok/images/p-10.jpg"></div> <div class="text">316不锈钢管</div></a> </li>
                <li> <a href="/products/304l.html"> <div class="img-center"><img src="/pok/images/p-11.jpg"></div> <div class="text">304L不锈钢管</div></a> </li>

            </ul>
        </div>

        <div class="panel-sd">
            <div class="tit">联系我们</div>
            <div class="contact-sd">
                <h4>佛山市裕成不锈钢有限公司</h4>
                <p>地址：佛山市顺德区潭村工业区</p>
                <p>Q Q：712965082</p>
                <p>电话：136-2032-8609</p>
                <p>网址：www.bxgty.com</p>
            </div>
        </div>
    </div>
    <div class="ct2-mn ct2-mn-left">
        <div class="position">当前位置： <a href='/' class=''>首页</a> &gt; <a href='/products/'>产品展示</a></div>
        <div class="mn-box">
            <ul class="list-1 clearfix">

                @foreach($products as $product)
                <li>
                    <div class="wrap">
                        <a href="/products/304.html" class="img-cover">
                            <span style="background-image: url(/storage/{{$product->thumbnail}});"></span>
                        </a>
                        <div class="text">
                            <h4><a href="/products/{{$product->id}}.html" >{{$product->title}}</a></h4>
                            <p> <a href="tencent://message/?uin=755930694&Menu=yes" target="_blank" class="bt">立即咨询</a>
                                <a href="/products/{{$product->id}}.html" class="bt">查看详情</a></p></div></div>
                </li>
                @endforeach

            </ul>
            <div class="pages">
                <div class="pagination">
                    共<strong>1</strong>页 <strong>6</strong>条        </div>
            </div>
        </div>

        <div class="panel-mn">
            <div class="tit">推荐资讯</div>
            <div class="bd">
                <ul class="list-5 clearfix">

                    <li><a href="/news/1.html"><span>2020-05-01</span>不锈钢焊管拉丝后要注意防锈</a></li>
                    <li><a href="/news/2.html"><span>2020-05-02</span>316L不锈钢管为什么被广泛应用在海洋环境中？</a></li>
                    <li><a href="/news/3.html"><span>2020-05-03</span>怎样增强不锈钢管的耐腐蚀性？</a></li>
                    <li><a href="/news/4.html"><span>2020-05-04</span>不锈钢焊管和碳钢管的差别在哪里？</a></li>
                    <li><a href="/news/5.html"><span>2020-05-05</span>304L不锈钢管与304不锈钢管有什么不同？</a></li>
                    <li><a href="/news/6.html"><span>2020-05-06</span>304不锈钢焊管会有磁性吗？</a></li>
                    <li><a href="/news/7.html"><span>2020-05-07</span>如何去除不锈钢焊管切割时留下的毛刺？</a></li>
                    <li><a href="/news/8.html"><span>2020-05-08</span>304不锈钢管的强度和硬度</a></li>
                    <li><a href="/news/9.html"><span>2020-05-09</span>不锈钢焊管碳元素的特性</a></li>
                    <li><a href="/news/10.html"><span>2020-05-10</span>说316L不锈钢焊管耐应力腐蚀</a></li>

                </ul>
            </div>
        </div>
        <div class="panel-mn">
            <div class="tit">推荐产品</div>
            <div class="bd">
                <ul class="list-6 clearfix">

                    <li> <a href="/products/b.html">
                            <div class="img-cover"><span style="background-image: url(/pok/images/p-19.jpg);"></span></div>
                            <div class="text"> <h4>不锈钢板</h4> <p>...</p></div> </a> </li>

                    <li> <a href="/products/jg.html">
                            <div class="img-cover"><span style="background-image: url(/pok/images/p-12.jpg);"></span></div>
                            <div class="text"> <h4>不锈钢角钢</h4> <p>...</p></div> </a> </li>

                    <li> <a href="/products/hrq.html">
                            <div class="img-cover"><span style="background-image: url(/pok/images/p-14.jpg);"></span></div>
                            <div class="text"> <h4>不锈钢换热器管</h4> <p>...</p></div> </a> </li>

                    <li> <a href="/products/mxg.html">
                            <div class="img-cover"><span style="background-image: url(/pok/images/p-17.jpg);"></span></div>
                            <div class="text"> <h4>不锈钢毛细管</h4> <p>...</p></div> </a> </li>

                </ul>
            </div>
        </div>
    </div>
</div>

@include('pok.common.footer')

</body>
</html>
