
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit" />
    <title>水性木器漆,装修木器漆,环保木器漆加盟代理十大品牌</title>
    <meta name="keywords" content="水性木器漆,装修木器漆,家装木器漆,环保木器漆,水性木器漆加盟代理,水性木器漆十大品牌" /><meta name="description" content="大荷水性木器漆是一家优质水性木器漆生产厂家,包含水性木器漆透明系列和水性木器漆实色系列.面向全国诚招木器漆加盟代理,加盟热线:0755-2776 1631" /><link href="/spectacle/css/base.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" />
</head>
<body>
@include('spectacle.common.header')


<div class="page_banner"><img src="/spectacle/img/5795e24f6673c.jpg"></div>
<!--banner-bar-->
<div class="page_search">
    <div class="content">
        <div class="home_ss_l"><span>当前位置：</span><a href='/'>大荷首页</a> » <a href='/sxmqq/'>水性木器漆</a></div>
        <div class="home_ss_r"><form name="searchForm" method="get" action="/search/">
                <input type="text" onclick="this.value=''" name="keyword" class="inp01" value="大荷水性漆" onfocus="if(this.value=='大荷水性漆'){this.value='';}"  onblur="if(this.value==''){this.value='大荷水性漆';}" />
                <input type="submit" value="" class="inp02" />
            </form></div>
    </div>
</div>
<!--page-search-->


<div class="content">
    <div class="right">
        <div class="pro_main">
            <div class="pro_wrap">
                @foreach($products as $product)
                <div class="pro_box">
                    <div class="pro_img">
                        <a href="/spectacle/product/detail/{{$product->id}}.html" target="_blank">
                            <img src="/storage/{{$product->thumbnail}}" alt="封闭底漆 水性木器漆">
                        </a>
                    </div>
                    <div class="pro_name">
                        <a href="/spectacle/product/detail/{{$product->id}}.html" target="_blank">
                            {{$product->title}}
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            {{$products->links('spectacle.common.pagination')}}
        </div>
        @include('spectacle.common.recommended')

    </div>
    @include('spectacle.common.leftBar')

</div>

@include('spectacle.common.footer')
<!--footer-->
<div id="roll" style="display:none"><div title="回到顶部" id="roll_top"></div></div>

<script type="text/javascript" src="/spectacle/js/nav.hover.js"></script>
</body>
</html>