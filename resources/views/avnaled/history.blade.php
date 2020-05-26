<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit" />
    <title>{{$title}}</title>
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="description" content="{{$description}}" />
    <link href="/avnaled/css/base.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" />
    <script src="/avnaled/js/index.js"></script>
</head>
<body>
@include('avnaled.common.header')

<div class="page_banner">
    @if($poster)
        <img src="/storage/{{$poster->site}}" alt="{{$poster->alt}}">
    @else
        <img src="/avnaled/img/banner4.jpg" alt="工矿灯品牌">
    @endif
</div>
<!--banner-bar-->


@include('avnaled.common.pageMenu')
<!--pagemenu-->
<div class="content">
    <div class="container info p45"><div class="lmt">
            <b>公司发展历程<em>development process</em></b><br>
        </div>
        <div class="history">
            <dl>
                <dt>
                    2017年
                </dt>
                <dd>
                    <span>2017.04</span>全新开发出数款超导鳞片式LED工矿灯及LED泛光灯引爆全国工业照明
                </dd>
            </dl>
            <dl>
                <dt>
                    2016
                </dt>
                <dd>
                    <span>2016.01</span>建立2400m²光学实验室及光学应用厅
                </dd>
            </dl>
            <dl>
                <dt>
                    2014
                </dt>
                <dd>
                    <span>2014.06</span>澳镭照明3500m²全国营销中心全面装修完毕
                </dd>
            </dl>
            <dl>
                <dt>
                    2013
                </dt>
                <dd>
                    <span>2013.03</span>开发出数十款适合国内销售渠道的LED工业产品
                </dd>
            </dl>
            <dl>
                <dt>
                    2012
                </dt>
                <dd>
                    <span>2015.08</span>开发出数十款适合国内销售渠道的LED工业产品
                </dd>
            </dl>
            <dl>
                <dt>
                    2011
                </dt>
                <dd>
                    <span>2014.04</span>成功签约中国西昌卫星发射中心
                </dd>
            </dl>
            <dl>
                <dt>
                    2009
                </dt>
                <dd>
                    <span>2009.06</span>更名灯港照明，正式向国外推动全新的自主品牌和高端商照产品
                </dd>
            </dl>
            <dl>
                <dt>
                    2008
                </dt>
                <dd>
                    <span>2008.03</span>80%以上NIKE专卖店采用澳镭灯具
                </dd>
            </dl>
            <dl>
                <dt>
                    2007
                </dt>
                <dd>
                    <span>2011.09</span>荣誉成为美国英坦斯指定光电器件供应商
                </dd>
            </dl>
            <dl>
                <dt>
                    2006
                </dt>
                <dd>
                    <span>2006.05</span>揭东五金厂成立宇亮照明科技成立
                </dd>
            </dl>
        </div>
    </div>
</div>
<!--content-->

@include('avnaled.common.footer')
<!--footer-->
<div id="roll" style="display:none"><div title="回到顶部" id="roll_top"></div></div>

<script type="text/javascript" src="/avnaled/js/nav.hover.js"></script>

</body>
</html>