<div class="left">
    <div class="leib2">
        <div class="tit"> 产品中心 <i>Product Center</i> </div>
        <div class="nr">
            @foreach($productCategories as $productCategory)
            <h3><a href="{{route('avnaled.pro_category', ['productCategory' => pin($productCategory->name)])}}">{{$productCategory->name}}</a></h3>
            @endforeach
        </div>
    </div>
    <div class="leib2">
        <div class="tit"> 联系我们  <i>Contact Us</i></div>
        <div class="leftlx">
            <div class="dianh">
                <div class="dianhua">
                    <p class="phone">
                        {{$settings['free']}}
                    </p>
                    <p class="mobile">
                        {{$settings['mobile']}}
                    </p>
                    <p class="fax">
                        {{$settings['tel']}}
                    </p>
                    <p class="QQ">
                        QQ：<a href="tencent://message/?uin={{$settings['qq']}}&Menu=yes">{{$settings['qq']}}</a>
                    </p>
                    <p class="addr">
                        {{$settings['address']}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>