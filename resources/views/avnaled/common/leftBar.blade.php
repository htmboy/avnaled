<div class="left">
    <div class="leib2">
        <div class="tit"> 产品中心 <i>Product Center</i> </div>
        <div class="nr">
            @foreach($productCategories as $productCategory)
            <h3><a href="/avnaled/product/secondary/{{$productCategory->id}}.html">{{$productCategory->name}}</a></h3>
            @endforeach
        </div>
    </div>
    <div class="leib2">
        <div class="tit"> 联系我们  <i>Contact Us</i></div>
        <div class="leftlx">
            <div class="dianh">
                <div class="dianhua">
                    <p class="phone">
                        400 6666 804
                    </p>
                    <p class="mobile">
                        18923117087
                    </p>
                    <p class="fax">
                        0757-8875 5137
                    </p>
                    <p class="email">
                        755930694@qq.com
                    </p>
                    <p class="addr">
                        广东省佛山市南海区罗村华南国际LED电光源灯饰城C区8路36~38栋
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>