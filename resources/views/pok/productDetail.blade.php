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
    <title>{{$product->title}}</title>
    <meta name="title" content="{{$product->seo_title}}">
    <meta name="description" content="{{$product->seo_description}}" />
    <meta name="keywords" content="{{$product->seo_keywords}}" />
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/pok/css/swiper.min.css" />
    <link rel="stylesheet" type="text/css" href="/pok/css/eyou.css" />
    <script type="text/javascript" src="/pok/js/jquery.min.js"></script>
    <script type="text/javascript" src="/pok/js/swiper.min.js"></script>
    <script type="text/javascript" src="/pok/js/eyou.js"></script>
    <script type="text/javascript" src="/pok/js/view_arcrank.js"></script>
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
    <div class="ct2-sd ct2-sd-right">
        @include('pok.common.sidebarShow')

        @include('pok.common.recommendedProduct')
    </div>
    <div class="ct2-mn ct2-mn-left">
        <div class="position">当前位置： <a href='{{route('pok.index')}}' class=''>首页</a> &gt; <a href='{{route('pok.product')}}' class=''>产品展示</a> &gt; <a href='{{route('pok.pro_category', ['productCategory' => pin($product->category->name)])}}' class=''>{{$product->category->name}}</a> &gt;{{$product->title}}</div>
        <div class="mn-box">
            <div class="eyou-showcase clearfix">
                <div class="pc-slide">
                    <div class="view">
                        <div class="swiper-container swiper-container-horizontal">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide img-center">
                                @if($product->gallery->isNotEmpty())

                                @foreach($product->gallery as $gallery)

                                    <div class="imgauto"> <img src="/storage/{{$gallery->gallery}}" rel="/storage/{{$gallery->gallery}}" class="jqzoom" /> </div>

                                @endforeach
                                @else
                                        <div class="imgauto"> <img src="/storage/{{$product->thumbnail}}" rel="/storage/{{$product->thumbnail}}" class="jqzoom" /> </div>
                                @endif
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="preview"> <a class="arrow-left" href="javascript:;"></a> <a class="arrow-right" href="javascript:;"></a>
                        <div class="swiper-container swiper-container-horizontal">
                            <div class="swiper-wrapper">
                                @foreach($product->gallery as $gallery)
                                <div class="swiper-slide"> <div class="imgauto"><img src="/storage/{{$gallery->gallery}}"></div> </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
                <div class="eyou-showcase-info">
                    <h1 class="protit">{{$product->title}}</h1>
                    <p>{{$product->characteristic}}</p>
                    <div class="tel"><a href="tencent://message/?uin=755930694&Menu=yes" class="btn">在线咨询</a></div>
                </div>
            </div>
            <div class="cp-content-tit"><span>产品详情</span></div>
            <div class="content-body">
                {!!$product->content!!}
            </div>
            <div class="eyou-tag">标签：{{$product->seo_keywords}} </div>
            <ul class="content-exp">
                <li><span>上一篇：</span>
                @if($product->previousItem())

                    <a href='{{route('pok.pro_detail', ['article' => $product->previousItem()->id])}}'>{{$product->previousItem()->title}}</a>
                    @else
                        没有了
                    @endif
                </li>

                <li><span>下一篇：</span>
                    @if($product->nextItem())
                    <a href='{{route('pok.pro_detail', ['article' => $product->nextItem()->id])}}'>{{$product->nextItem()->title}}</a>
                    @else
                        没有了
                    @endif
                </li>
            </ul>
        </div>




        <br>

        @include('pok.common.recommended')

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

<script type="text/javascript" src="/style/jquery.imagezoom.min.js"></script><script>
    if ($(window).width() > 767) {
        $('.jqzoom').imagezoom();
    }

    $('.preview .swiper-slide').eq(0).addClass('active-nav');

    var viewSwiper = new Swiper('.view .swiper-container', {
        on: {
            slideChangeTransitionStart: function() {
                updateNavPosition()
            }
        }
    });
    $('.view .arrow-left,.preview .arrow-left').on('click', function(e) {
        e.preventDefault();
        if (viewSwiper.activeIndex === 0) {
            viewSwiper.slideTo(viewSwiper.slides.length - 1, 1000);
            return
        }
        viewSwiper.slidePrev();
    });
    $('.view .arrow-right,.preview .arrow-right').on('click', function(e) {
        e.preventDefault();
        if (viewSwiper.activeIndex === viewSwiper.slides.length - 1) {
            viewSwiper.slideTo(0, 1000);
            return
        }
        viewSwiper.slideNext();
    });
    var previewSwiper = new Swiper('.preview .swiper-container', {
        //visibilityFullFit: true,
        slidesPerView: 3,
        allowTouchMove: false,
        spaceBetween: 5,
        on: {
            tap: function() {
                viewSwiper.slideTo(previewSwiper.clickedIndex)
            }
        }
    });
    function updateNavPosition() {
        $('.preview .active-nav').removeClass('active-nav');
        var activeNav = $('.preview .swiper-slide').eq(viewSwiper.activeIndex).addClass('active-nav');
        if (!activeNav.hasClass('swiper-slide-visible')) {
            if (activeNav.index() > previewSwiper.activeIndex) {
                var thumbsPerNav = Math.floor(previewSwiper.width / activeNav.width()) - 1;
                previewSwiper.slideTo(activeNav.index() - thumbsPerNav);
            } else {
                previewSwiper.slideTo(activeNav.index());
            }
        }
    }
</script>
</body>
</html>