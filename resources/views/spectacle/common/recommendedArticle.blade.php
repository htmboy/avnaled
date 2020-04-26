<div class="n_info_con2">
    <h3 class="t04"><b>“</b>推荐阅读<b>”</b></h3>
    <div class="info_b">
        <ul class="p_list_ul">
            @foreach($article_recommends as $article_recommend)
            <li><h4><a target="_blank" href="/spectacle/article/detail/{{$article_recommend->id}}.html">{{$article_recommend->title}}</a></h4></li>
            @endforeach
        </ul>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="info_key">
        <span>【本文标签】：</span>
        <a target="_blank" href="http://www.dhq898.com/sxmqq">水性木器漆</a>
        <a target="_blank" href="http://www.dhq898.com/sxqmq">墙面乳胶漆</a> <br>
        <span>【责任编辑】：</span>
        澳镭照明<em></em>版权所有：
        <a href="http://www.aooled.com" target="_blank">http://www.aooled.com</a>转载请注明出处 </div>
</div>