<div class="panel-sd">
    <div class="tit">新闻资讯</div>
    <ul class="lanmu" id="news_nav">
        @foreach($articleCategories as $key => $name)
        <li class=""> <a href="{{route('pok.art_category', ['articleCategory' => $key])}}">{{$name}}</a> </li>
        @endforeach
    </ul>
</div>

<script>
    var news = document.getElementById('news_nav');
    var newsItem = news.getElementsByTagName('a');
    for (var i = 0; i < newsItem.length; i++){
        if (newsItem[i].href.replace(location.protocol + '//' + location.host, '') == location.pathname)
            newsItem[i].parentElement.setAttribute('class', newsItem[i].parentElement.getAttribute('class')+ ' active')
    }

</script>