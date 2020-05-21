<div class="panel-sd">
    <div class="tit">热销产品</div>
    <ul class="list-3">

        @foreach($product_recommends as $product)
        <li>
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
        <p>地址：广东省佛山市南海区罗村华南国际LED电光源灯饰城C区8路36~38栋-澳镭照明</p>
        <p>Q Q：755930694</p>
        <p>电话：189-2311-7087</p>
        <p>网址：{{route('pok.index')}}</p>
    </div>
</div>