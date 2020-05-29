<div id="header">
    <div class="header_top">
        【好消息！】澳镭照明工矿灯消费补贴正在进行
        <span>
      <a href="javascript:void(0);" onClick="javascript:addBookmark(this)" title="收藏本站">收藏澳镭工矿灯</a>
      |
      <a href="{{route('avnaled.contact')}}" title="联系我们">联系我们</a>
    </span>
    </div>
</div>

<div class="header_m">
    <h2><a href="/"><img src="/avnaled/img/logo.png" alt="led工矿灯"></a></h2>
    <h3>工业照明领域首选服务品牌<em>SINCE  2007</em></h3>
    <h4>
        <p>免费咨询热线<em>{{$settings['free']}}</em></p>
        <span>工厂车间照明专家</span>
    </h4>
</div>

<div class="header_nav">
    <ul id="nav" class="nav-bar ul-list">
        <li><a href="{{route('avnaled.index')}}">澳镭首页</a></li>
        <li><a href="{{route('avnaled.cases')}}">案例抢先看</a></li>
        <li><a href="javascript:void(0)">{{$gongkuangdeng->name}}</a>
            <ul>
                @foreach($gongkuangdeng->product as $product)
                    <li><a href="{{route('avnaled.pro_detail', ['product' => $product->id])}}">{{$product->title}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="{{route('avnaled.product')}}">产品中心</a>
            <ul>
                @foreach($productCategories as $productCategory)
                    <li><a href="{{route('avnaled.pro_category', ['productCategory' => $productCategory->id])}}">{{$productCategory->name}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="javascript:void(0)">解决方案</a>
            <ul>
                <li><a href="{{route('avnaled.art_category', ['articleCategory' => $case_id])}}">装灯案例</a></li>
                <li><a href="{{route('avnaled.art_category', ['articleCategory' => $QA_id])}}">常见问题</a></li>
            </ul>
        </li>
        <li><a href="{{route('avnaled.article')}}">新闻中心</a>
            <ul>
                @foreach($articleCategories as $key => $articleCategory)
                    <li><a href="{{route('avnaled.art_category', ['articleCategory' => $key])}}">{{$articleCategory}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="{{route('avnaled.contact')}}">联系我们</a></li>
    </ul>
</div>

<script>
    var nav = document.getElementById('nav');
    var navItem = nav.getElementsByTagName('a');
    for (var i = 0; i < navItem.length; i++){
        if (navItem[i].href.replace(location.protocol + '//' + location.host, '') == location.pathname)
            navItem[i].setAttribute('class', 'hover')
    }
</script>