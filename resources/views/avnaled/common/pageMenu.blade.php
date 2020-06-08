<section class="pagemenu tr">
    <div class="container">
        <ul class="ul-list" id="page_nav">
            <li><a href="{{route('avnaled.introduction')}}">公司简介</a></li>
            <li><a href="{{route('avnaled.history')}}">发展历程</a></li>
            <li><a href="{{route('avnaled.contact')}}">联系我们</a></li>
        </ul>
    </div>

</section>
<script>
    var page = document.getElementById('page_nav');
    var pageItem = page.getElementsByTagName('a');
    for (var i = 0; i < pageItem.length; i++){
        console.log(pageItem[i].parentElement);
        if (pageItem[i].href.replace(location.protocol + '//' + location.host, '') == location.pathname)
            pageItem[i].setAttribute('class', 'this')
    }
</script>