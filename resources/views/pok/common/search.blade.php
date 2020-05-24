<div class="eyou-sou" style="display: block">
    <div class="container clearfix">
        <div class="hot"> <strong>热门关键词：</strong>

            @foreach($words as $word)
                @if($word->link)
                    <a href="{{$word->link}}">{{$word->keyword}}</a>
                    @else

                    <a href="{{route('pok.search', ['word' => $word->keyword])}}">{{$word->keyword}}</a>
                @endif

            @endforeach
        </div>
    </div>
</div>