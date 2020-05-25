<div class="RandomNews">
    <h3 class="diysr"> 热门产品 <i> / Hot Products</i>
        <div class="line"></div>
    </h3>
    <div class="news_random">
        @foreach($product_recommends as $recommend)
            <div class="hot_pro">
                <div class="hot_img">
                    <a href="{{route('avnaled.pro_detail', ['$product' => $recommend->id])}}" target="_blank">
                        <img src="/storage/{{$recommend->thumbnail}}">
                    </a>
                </div>
                <div class="hot_name">
                    <a href="{{route('avnaled.pro_detail', ['$product' => $recommend->id])}}" target="_blank">{{$recommend->title}}</a>
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
                <a href="{{route('avnaled.art_detail', ['article' => $article_recommends->first()->id])}}" target="_blank">
                    <img src="/storage/{{$article_recommends->first()->thumbnail}}" alt="{{$article_recommends->first()->title}}" />
                    <p>{{$article_recommends->first()->title}}</p>
                </a>
            </dt>
            <dd>
                <p>{{$article_recommends->first()->title}}</p>
                <span>{{mb_substr(strip_tags($article_recommends->first()->content), 0, 200)}}</span>
                <a href="{{route('avnaled.art_detail', ['article' => $article_recommends->first()->id])}}" target="_blank">【更多详情】</a>
            </dd>
        </dl>
        <ul>
            @foreach($article_recommends as $key => $recommend)
                <li class="{{$key%2?'fr':'fl'}}">
                    <span class="fr">{{date('Y-m-d', strtotime($recommend->created_at))}}</span>
                    <a target="_blank" href="{{route('avnaled.art_detail', ['article' => $recommend->id])}}">
                        {{$recommend->title}}
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="clear"></div>
    </div>
</div>