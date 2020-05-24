<div class="home_ss">
    <div class="content">
        <div class="home_ss_l">
            <b>他们还在搜：</b>
            @foreach($words as $keyword)
                @if($keyword->link)
            <a href="{{$keyword->link}}">{{$keyword->keyword}}</a>
                @else

            <a href="{{route('avnaled.search', ['word' => $keyword->keyword])}}">{{$keyword->keyword}}</a>
                @endif
                    |
                @endforeach
        </div>
        <div class="home_ss_r">
            <form name="searchForm" method="get" action="{{route('avnaled.search')}}">
                <input type="text" onclick="this.value=''" name="word" class="inp01" value="led工矿灯" onfocus="if(this.value=='工矿灯'){this.value='';}"  onblur="if(this.value==''){this.value='想要咨询哪款灯具呢';}" />
                <input type="submit" value="" class="inp02" />
            </form>
        </div>
    </div>
</div>