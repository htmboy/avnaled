<div class="panel-mn">
    <div class="tit">推荐资讯</div>
    <div class="bd">
        <ul class="list-5 clearfix">
            @foreach($article_recommends as $article)
            <li><a href="{{route('pok.art_detail', ['article' => $article->id])}}"><span>{{date('Y-m-d', strtotime($article->updated_at))}}</span>{{$article->title}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
<div class="panel-mn">
    <div class="tit">推荐产品</div>
    <div class="bd">
        <ul class="list-6 clearfix">
            @foreach($product_recommends as $product)
            <li>
                <a href="{{route('pok.pro_detail', ['product' => $product->id])}}">
                    <div class="img-cover">
                        <span style="background-image: url(/storage/{{$product->thumbnail}});"></span>
                    </div>
                    <div class="text">
                        <h4>{{$product->title}}</h4>
                        <p>{{Str::limit(strip_tags($product->content), 100)}}</p>
                    </div>
                </a>
            </li>
            @endforeach

        </ul>
    </div>
</div>