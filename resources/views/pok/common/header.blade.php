<div class="header">

    <div class="topbar">
        <div class="container">
            <ul> <li><a href="{{route('pok.introduction')}}">关于我们</a></li> <li class="pipe">|</li> <li><a href="{{route('pok.contact')}}">联系我们</a></li></ul>
            <span>欢迎光临广东澳镭照明电器有限公司官网！</span> </div>
    </div>

    <div class="container clearfix"> <a href="javascript:;" class="menu-btn"><span></span></a>
        <div class="logo img-center"><a href="{{route('pok.index')}}"><img src="/pok/images/logo.png"></a></div>
        <div class="tel">全国咨询热线：<strong>189-2311-7087</strong></div>
    </div>

    <div class="nav">
        <div class="container">

            <ul>

                <li class="active"><a href="{{route('pok.index')}}">首页</a></li>

                <li class="dropdown">
                    <i class="arr"></i>
                    <a href="{{route('pok.introduction')}}">关于我们</a>

                    <div class="dropdown-box">
                        <p><a href="{{route('pok.introduction')}}">公司简介</a></p>
                        <p><a href="{{route('pok.history')}}">企业文化</a></p>

                    </div>

                </li>

                <li class="dropdown"> <i class="arr"></i> <a href="{{route('pok.product')}}">产品展示</a>

                    <div class="dropdown-box">
                        @foreach($fanguangdengCategories as $fgd)
                        <p><a href="{{route('pok.pro_secondary', ['product' => pin($fgd->name)])}}">{{$fgd->name}}</a></p>
                        @endforeach
                    </div>

                </li>

                <li class="dropdown">
                    <i class="arr"></i> <a href="{{route('pok.article')}}">新闻资讯</a>
                    <div class="dropdown-box">
                        <p><a href="/hangye/">行业资讯</a></p>
                        <p><a href="/wenti/">常见问题</a></p>
                    </div>
                </li>
                <li class="">  <a href="{{route('pok.cases')}}">工程案例</a> </li>
                <li class="">  <a href="{{route('pok.contact')}}">联系我们</a> </li>
            </ul>

        </div>
    </div>
</div>