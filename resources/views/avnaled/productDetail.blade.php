
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit" />
    <title>{{$product->seo_title}}</title>
    <meta name="keywords" content="{{$product->seo_keywords}}" />
    <meta name="description" content="{{$product->seo_description}}" />
    <link href="/avnaled/css/base.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" />
    <script src="/avnaled/js/index.js"></script>

    <style type="text/css">
        .RandomNews { border:none;}
        .diysr { border-top:none; padding:0;}
        .diysr .line { margin:0}
        .news_random { margin:25px auto 0;}
        .new-s .latest_dl { float:left; width:300px; padding:0; height:150px; position:relative; overflow:hidden;}
        .new-s .latest_dl a { display:block; height:100%; width:100%; float:left;}
        .new-s .latest_dl img { width:100%; height:150px;}
        .new-s .latest_dl span { width:100%; height:30px; line-height:30px; position:absolute; left:0; top:120px; background:rgba(0,0,0,0.7); display:block; font:12px 'Microsoft  YaHei'; color:#fff; transition:all 0.3s;}
        .new-s .latest_dl span p { width:100%; height:30px; line-height:30px; text-align:center; font-size:14px; overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}
        .new-s .latest_dl span em { font-style:normal; line-height:20px; width:94%; margin:10px 3%; max-height:100px; float:left; overflow:hidden; text-index:2em;}
        .new-s .latest_dl a:hover span { top:0; height:150px;}
        .new-s .latest_dl a:hover span p { border-bottom:1px solid #fff;}
        .news_random ul { float:right; width:750px;}
        .news_random ul li { width:360px; height:30px; line-height:30px;}
        .news_random ul li span { width:70px; color:#999; font-size:smaller;}
        .news_random ul li { width:360px; height:30px; line-height:30px;}
        .news_random ul li a { padding:0 0 0 12px; float:left; width:270px; overflow:hidden; white-space:nowrap; text-overflow:ellipsis; background-position-y:center;}
        .news_random ul li a:hover { color:#15813A; text-decoration:none;}
    </style>

</head><body>
@include('avnaled.common.header')


<div class="page_banner">
    <img src="/avnaled/img/5795e2caca5c5.jpg">
</div>
<!--banner-bar-->
@include('avnaled.common.search')
<!--page-search-->


<script type="text/javascript" src="/avnaled/js/pro.js"></script>
<div class="content">
    <div class="pro_details details">
        <div class="details-slider-box">
            <ul>

            </ul>
            <span class="btnl"></span> <span class="btnr"></span> </div>
        <div class="pro_attr">
            <h3>{{$product->title}}</h3>
            <div class="pro_attr_p">
                <dl>
                    <dt>产品编号:</dt>
                    <dd>{{$product->number}}</dd>
                </dl><dl>
                    <dt>产品尺寸:</dt>
                    <dd>{{$product->size}}</dd>
                </dl><dl>
                    <dt>发光颜色:</dt>
                    <dd>{{$product->color}}</dd>
                </dl>
                <dl>
                    <dt>包装体积:</dt>
                    <dd>{{$product->package}}</dd>
                </dl>
                <dl>
                    <dt>灯具质量:</dt>
                    <dd>{{$product->weight}}</dd>
                </dl>
                <dl>
                    <dt>输入电压:</dt>
                    <dd>{{$product->voltage}}</dd>
                </dl>
                <dl>
                    <dt>光束角度:</dt>
                    <dd>{{$product->angle}}</dd>
                </dl>
                <dl>
                    <dt>防水等级:</dt>
                    <dd>{{$product->waterproof}}</dd>
                </dl>
                <dl>
                    <dt>寿命时长:</dt>
                    <dd>{{$product->life}}</dd>
                </dl>
                <dl>
                    <dt>投射距离:</dt>
                    <dd>{{$product->distance}}</dd>
                </dl>
                <dl>
                    <dt>外壳材质:</dt>
                    <dd>{{$product->material}}</dd>
                </dl>
                <dl>
                    <dt>产品特性:</dt>
                    <dd>{{$product->characteristic}}</dd>
                </dl>
            </div>
            <div class="pd_hotline"> <span>全国服务热线：</span><span class="font_hotline">400 6666 804</span> </div>
            <div class="propar" style="text-align: center; padding-top: 20px;">
                <div class="proparp"> <a href="http://wpa.qq.com/msgrd?v=3&amp;site=澳镭照明&amp;menu=yes&amp;uin=755930694" target="_blank" title="立即咨询"><img style="border: 0" src="/avnaled/img/buynowsmalls.gif" alt="立即咨询"></a> </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <script type="text/javascript">
        var temp_html = '@foreach($product->gallery as $key => $gallery)<li><img src="/storage/{{$gallery->gallery}}" alt="{{$product->title.$key}}" /></li>@endforeach';
        $(".details-slider-box ul").html(temp_html);
        $('.details').slide({ mainCell: ".details-slider-box ul", effect: "leftLoop", autoPlay: true, vis: 1, prevCell: ".btnl", nextCell: ".btnr" });

    </script>
    <div class="pro_content">
        {!!$product->content!!}
    </div>
    <div class="clear"></div>
    <div class="content">
        <div class="pro_commend">
            <p style="font-size:20px;color:#15813A;border-top:2px solid #15813A;border-bottom:1px solid #15813A;padding:10px 15px;display:inline-block;font-weight:bold;margin:40px 0 0;"> 推荐产品 </p>
            <ul>
                @foreach($product_recommends as $product)
                <li>
                    <a href="/avnaled/product/detail/{{$product->id}}.html">
                        <img src="/storage/{{$product->thumbnail}}" alt="{{$product->title}}">
                        <span>{{$product->title}}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <!--热门推荐-->
    </div>
    <div class="clear"></div>
    <div class="RandomNews">
        <h3 class="diysr"> 推荐资讯 <i> / Recommended News</i>
            <div class="line"></div>
        </h3>
        <div class="news_random news_random_ new-s">
            <div class="latest_dl">
                <a href="/avnaled/article/detail/{{$article_recommends->first()->id}}.html" target="_blank">
                    <img src="/avnaled/img/5e9eb43e2e1b9.png" alt="{{$article_recommends->first()->title}}" />
                    <span>
                        <p>{{$article_recommends->first()->title}}</p>
                        <em>{{mb_substr(strip_tags($article_recommends->first()->content), 0, 180)}}</em>
                    </span>
                </a>
            </div>
            <ul>
                @foreach($article_recommends as $key => $article)
                <li class="{{$key%2?'fr':'fl'}}">
                    <span class="fr">2020-04-20</span>
                    <a target="_blank" href="/avnaled/article/detail/{{$article->id}}.html">{{$article->title}}</a>
                </li>
                @endforeach
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    <!--hot-news-->
</div>

@include('avnaled.common.footer')
<!--footer-->
<div id="roll" style="display:none"><div title="回到顶部" id="roll_top"></div></div>

<script type="text/javascript" src="/avnaled/js/nav.hover.js"></script>
</body>
</html>