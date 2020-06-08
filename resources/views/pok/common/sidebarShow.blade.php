<div class="panel-sd">
    <div class="tit">产品展示</div>
    <ul class="lanmu"  id="page_nav">
        @foreach($productCategories as $category)
        <li class="open">
            <a href="{{route('pok.pro_category', ['productCategory' => pin($category->name)])}}">{{$category->name}}</a>
        </li>
        @endforeach

    </ul>
</div>
<script>
    var page = document.getElementById('page_nav');
    var pageItem = page.getElementsByTagName('a');
    for (var i = 0; i < pageItem.length; i++){
        if (pageItem[i].href.replace(location.protocol + '//' + location.host, '') == location.pathname)
            pageItem[i].parentElement.setAttribute('class', pageItem[i].parentElement.getAttribute('class')+ ' active')
    }
</script>