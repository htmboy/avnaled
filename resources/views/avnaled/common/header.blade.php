<div id="header">
    <div class="header_top">
        【好消息！】澳镭照明工矿灯消费补贴正在进行
        <span>
      <a href="javascript:void(0);" onClick="javascript:addBookmark(this)" title="收藏本站">收藏澳镭工矿灯</a>
      |
      <a href="/avnaled/contact.html" title="联系我们">联系我们</a>
    </span>
    </div>
</div>

<div class="header_m">
    <h2><a href="/"><img src="/avnaled/img/logo.png" alt="澳镭照明工矿灯"></a></h2>
    <h3>工业照明领域首选服务品牌<em>SINCE  2007</em></h3>
    <h4>
        <p>免费咨询热线<em>400 6666 804</em></p>
        <span>工厂车间照明专家</span>
    </h4>
</div>

<div class="header_nav">
    <ul id="nav" class="nav-bar ul-list">
        <li><a href="/avnaled/index.html">澳镭首页</a></li>
        <li><a href="/avnaled/cases.html">案例抢先看</a></li>
        <li><a href="javascript:void(0)">{{$gongkuangdeng->name}}</a>
            <ul>
                @foreach($gongkuangdeng->product as $product)
                    <li><a href="/avnaled/product/detail/{{$product->id}}.html">{{$product->title}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="/avnaled/product.html">产品中心</a>
            <ul>
                @foreach($productCategories as $productCategory)
                    <li><a href="/avnaled/product/{{$productCategory->id}}.html">{{$productCategory->name}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="javascript:void(0)">解决方案</a>
            <ul>
                <li><a href="/avnaled/article/{{$case_id}}.html">装灯案例</a></li>
                <li><a href="/avnaled/article/{{$QA_id}}.html">常见问题</a></li>
            </ul>
        </li>
        <li><a href="/avnaled/article.html">新闻中心</a>
            <ul>
                @foreach($articleCategories as $key => $articleCategory)
                    <li><a href="/avnaled/article/{{$key}}.html">{{$articleCategory}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="/avnaled/contact.html">联系我们</a></li>
    </ul>
</div>