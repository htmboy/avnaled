<div class="panel-sd">
    <div class="tit">新闻资讯</div>
    <ul class="lanmu">
        @foreach($articleCategories as $key => $name)
        <li class=""> <a href="{{route('pok.art_category', ['articleCategory' => $key])}}">{{$name}}</a> </li>
        @endforeach
    </ul>
</div>