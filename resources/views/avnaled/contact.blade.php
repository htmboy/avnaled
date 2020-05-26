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
    <div class="container info p45">
        <p>
            <span style="font-size:16px;"><strong> 广东澳镭照明电器有限公司</strong></span>
        </p>
        <p>
            <span style="font-size:14px;color:#666666;">公司地址：广东省佛山市南海区罗村华南国际LED电光源灯饰城C区8路36~38栋-澳镭照明</span>
        </p>
        <p>
            <span style="color:#666666;font-size:14px;">免费电话：400 6666 804</span>
        </p>
        <p>
            <span style="color:#666666;font-size:14px;">公司电话：0757-88755137</span>
        </p>
        <p>
            <span style="color:#666666;font-size:14px;">公司传真：0757-81808183</span>
        </p>
        <p>
            <span style="color:#666666;font-size:14px;">公司邮箱：755930694@qq.com</span>
        </p>
        <p>
            <span style="color:#666666;font-size:14px;"><span style=" font-size:14px;color:#666666;"></span><br />
            </span>
        </p>
        <p id="allmap">

        </p>
        <p>

        </p>
        <p>
            <span style="font-size:16px;">
                <table style="width:100%" cellpadding="2" cellspacing="0" align="left" border="0" class="ke-zeroborder">
                    <tbody>
                        <tr>
                            <td>
                                <span style="color:#666666;font-size:14px;white-space:normal;">微信公众平台</span><span style="color:#666666;font-size:14px;white-space:normal;">：</span><br />
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <img src="/avnaled/img/indimg30.jpg" width="150" height="150" style="font-size:16px;white-space:normal;" /><br />
                            </td>

                        </tr>
                    </tbody>
                </table><br /><br />
            </span>
        </p>
        <p>
            <br />
        </p>
        <p>
            <br />
        </p>
        <style type="text/css">
            html,body{margin:0;padding:0;}
            .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
            .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
        </style>
    </div>
</div>
<!--content-->

@include('avnaled.common.footer')
<!--footer-->
<div id="roll" style="display:none"><div title="回到顶部" id="roll_top"></div></div>

<script type="text/javascript" src="/avnaled/js/nav.hover.js"></script>

</body>
</html>