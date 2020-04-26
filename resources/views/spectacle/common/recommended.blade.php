<div class="RandomNews">
    <h3 class="diysr"> 热门产品 <i> / Hot Products</i>
        <div class="line"></div>
    </h3>
    <div class="news_random">
        @foreach($product_recommends as $recommend)
            <div class="hot_pro">
                <div class="hot_img">
                    <a href="/spectacle/product/detail/{{$recommend->id}}.html" target="_blank">
                        <img src="/storage/{{$recommend->thumbnail}}">
                    </a>
                </div>
                <div class="hot_name">
                    <a href="/spectacle/product/detail/{{$recommend->id}}.html" target="_blank">{{$recommend->title}}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="RandomNews">
    <h3 class="diysr"> 推荐资讯 <i> / Recommended News</i>
        <div class="line"></div>
    </h3>
    <div class="news_random news_random_ new-s">
        <dl>
            <dt>
                <a href="/spectacle/article/detail/{{$article_recommends->first()->id}}.html" target="_blank">
                    <img src="{{$article_recommends->first()->thumbnail}}" alt="{{$article_recommends->first()->title}}" />
                    <p>{{$article_recommends->first()->title}}</p>
                </a>
            </dt>
            <dd>
                <p>{{$article_recommends->first()->title}}</p>
                <span>我们都知道，家具漆是家具生产工艺中常见的一种工艺，在给房子装修时，家具漆是必不可少的一种材料。但家具漆有很多种效果，开放式和封闭式是常见的两种，很多朋友不知道两者的区别在哪，今天，小编就为大家详细介绍一下。</span>
                <a href="/spectacle/article/detail/{{$article_recommends->first()->id}}.html" target="_blank">【更多详情】</a>
            </dd>
        </dl>
        <ul>
            @foreach($article_recommends as $key => $recommend)
                <li class="{{$key%2?'fr':'fl'}}">
                    <span class="fr">{{date('Y-m-d', strtotime($recommend->created_at))}}</span>
                    <a target="_blank" href="/spectacle/article/detail/{{$recommend->id}}.html">
                        {{$recommend->title}}
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="clear"></div>
    </div>
</div>