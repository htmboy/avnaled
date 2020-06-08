<div class="header">

    <div class="topbar">
        <div class="container">
            <ul> <li><a href="{{route('pok.introduction')}}">关于我们</a></li> <li class="pipe">|</li> <li><a href="{{route('pok.contact')}}">联系我们</a></li></ul>
            <span>欢迎光临广东澳镭照明电器有限公司官网！</span> </div>
    </div>

    <div class="container clearfix"> <a href="javascript:;" class="menu-btn"><span></span></a>
        <div class="logo img-center"><a href="{{route('pok.index')}}"><img src="/pok/images/logo.png"></a></div>
        <div class="tel">全国咨询热线：<strong>{{$settings['free']}}</strong></div>
    </div>

    <div class="nav">
        <div class="container">

            <ul>

                <li><a href="{{route('pok.index')}}">首页</a></li>

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
                        <p><a href="{{route('pok.pro_category', ['productcategory' => pin($fgd->name)])}}">{{$fgd->name}}</a></p>
                        @endforeach
                    </div>

                </li>

                <li class="dropdown">
                    <i class="arr"></i> <a href="{{route('pok.article')}}">新闻资讯</a>
                    <div class="dropdown-box">
                        @foreach($articleCategories as $article)
                        <p><a href="{{route('pok.art_category', ['articleCategory' => pin($article)])}}">{{$article}}</a></p>
                        @endforeach
                    </div>
                </li>
                <li class="">  <a href="{{route('pok.cases')}}">工程案例</a> </li>
                <li class="">  <a href="{{route('pok.contact')}}">联系我们</a> </li>
            </ul>

        </div>
    </div>
</div>
<script>
    var nav = document.getElementsByClassName('nav')[0];
    var navItem = nav.getElementsByTagName('a');
    for (var i = 0; i < navItem.length; i++){
        if (navItem[i].href.replace(location.protocol + '//' + location.host, '') == location.pathname){
            if(navItem[i].parentElement.nodeName == 'P')
                navItem[i].parentElement.parentElement.parentElement.setAttribute('class', navItem[i].parentElement.parentElement.parentElement.getAttribute('class') + ' active')
            else
                navItem[i].parentElement.setAttribute('class', navItem[i].parentElement.getAttribute('class') + ' active')
        }
    }
</script>