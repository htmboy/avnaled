<div class="panel-sd">
    <div class="tit">热销产品</div>
    <ul class="list-3">
        @foreach($product_recommends as $product)
        <li class="active">
            <a href="{{route('pok.pro_detail', ['product' => $product->id])}}">
                <div class="img-center">
                    <img src="/storage/{{$product->thumbnail}}">
                </div>
                <div class="text">{{$product->title}}</div>
            </a>
        </li>
        @endforeach

    </ul>
</div>
<div class="panel-sd">
    <div class="tit">联系我们</div>
    <div class="contact-sd">
        <h4>广东澳镭照明电器有限公司</h4>
        <p>地址：{{$settings['address']}}</p>
        <p>Q Q：<a href="tencent://message/?uin={{$settings['qq']}}&Menu=yes">{{$settings['qq']}}</a></p>
        <p>电话：{{$settings['mobile']}}</p>
        <p>网址：{{route('pok.index')}}</p>
    </div>
</div>