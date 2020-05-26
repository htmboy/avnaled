<div class="footer">
    <div class="foot">
        <div class="foot_t">
            <ul class="foot_link" style="width:118px">
                <h3>产品系列</h3>
                @foreach($productMap as $key => $product)
                <li><a href="{{route('avnaled.pro_category', ['productCategory' => $key])}}">{{$product}}</a></li>
                @endforeach
            </ul>
            <ul class="foot_link" style="width:118px">
                <h3>解决方案</h3>
                <li><a href="{{route('avnaled.art_category', ['articleCategory' => $case_id])}}">装灯案例</a></li>
                <li><a href="{{route('avnaled.art_category', ['articleCategory' => $QA_id])}}">常见问题</a></li>
                <li><a href="{{route('avnaled.contact')}}">联系我们</a></li>
            </ul>
            <ul class="foot_link" style="width:118px">
                <h3>澳镭品牌</h3>
                <li><a href="{{route('avnaled.introduction')}}">关于澳镭</a></li>
                <li><a href="{{route('avnaled.history')}}">发展历程</a></li>
                <li><a href="{{route('avnaled.art_category', ['articleCategory' => $company_id])}}">澳镭动态</a></li>
            </ul>
            <div class="foot_code" style="width:490px">
                <ul class="code">
                    <li>
                        <img src="/avnaled/img/indimg30.jpg" width="80" height="80" align="" />
                        <em>微信公众号</em>
                    </li>
{{--                    <li>--}}
{{--                        <img src="/avnaled/img/indimg30.gif" width="80" height="80" align="" />--}}
{{--                        <em>手机客户端</em>--}}
{{--                    </li>--}}
                </ul>
                <p>服务热线：400 6666 804</p>
                <p class="p02">咨询电话：18923117087</p>
                <p class="p03">总经理信箱：755930694@qq.com</p>
                <p class="p04">地址：广东省佛山市南海区罗村华南国际LED电光源灯饰城C区8路36~38栋</p>
            </div>
        </div>
        <div class="copyright">
            版权所有 &copy;2006-{{date('Y'), time()}} 广东澳镭照明电器有限公司, All Rights Reserved. &nbsp;备案号:
            <a href="http://www.beian.miit.gov.cn" title="粤ICP备10222602号-2" target="_blank" rel="nofollow">粤ICP备10222602号-2</a>
            <span style="white-space:normal;"> </span>
            <span style="white-space:normal;"></span>
        </div>
        <div class="frilinks">
            @foreach($links as $link)
                <a href="{{$link->link}}" target="_blank">{{$link->name}}</a>
            @endforeach
        </div>
        <div class="frilinksSubmit">
            <a href="javascript:;" class="wap_qq">联系QQ:755930694</a>
        </div>
    </div>
</div>