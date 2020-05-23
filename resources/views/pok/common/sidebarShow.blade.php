<div class="panel-sd">
    <div class="tit">产品展示</div>
    <ul class="lanmu">
        @foreach($productCategories as $category)
        <li class="open">
            <a href="{{route('pok.pro_category', ['product' => $category->id])}}">{{$category->name}}</a>
        </li>
        @endforeach

    </ul>
</div>