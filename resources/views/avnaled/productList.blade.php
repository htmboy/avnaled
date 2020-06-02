
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
</head>
<body>
@include('avnaled.common.header')


<div class="page_banner">
    @if($poster->exists)
        <img src="/storage/{{$poster->site}}" alt="{{$poster->alt}}">
    @else
        <img src="/avnaled/img/5795e3e9ce74a.jpg" alt="{{$keywords}}">
    @endif
</div>
<!--banner-bar-->
@include('avnaled.common.search')
<!--page-search-->


<div class="content">
    <div class="right">
        <div class="pro_main">
            <div class="pro_wrap">
                @foreach($products as $product)
                <div class="pro_box">
                    <div class="pro_img">
                        <a href="{{route('avnaled.pro_detail', ['product' => $product->id])}}" target="_blank">
                            <img src="/storage/{{$product->thumbnail}}" alt="{{$product->seo_keywords}}">
                        </a>
                    </div>
                    <div class="pro_name">
                        <a href="{{route('avnaled.pro_detail', ['product' => $product->id])}}" target="_blank">
                            {{$product->title}}
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            {{$products->links('avnaled.common.pagination')}}
        </div>
        @include('avnaled.common.recommended')

    </div>
    @include('avnaled.common.leftBar')

</div>

@include('avnaled.common.footer')
<!--footer-->
<div id="roll" style="display:none"><div title="回到顶部" id="roll_top"></div></div>

<script type="text/javascript" src="/avnaled/js/nav.hover.js"></script>
</body>
</html>