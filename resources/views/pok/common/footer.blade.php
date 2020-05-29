<div class="section" style="padding-top: 0;">
    <div class="container">

        <div class="eyou-link" data-aos="fade-up">
            <h4>友情链接 <small>/ LINKS</small></h4>
            <ul class="clearfix">
                @foreach($links as $link)
                <li><a href="{{$link->link}}" target="_blank">{{$link->name}}</a></li>
                @endforeach
            </ul>
        </div>

    </div>
</div>

<div class="footer">
    <div class="footer-link">
        <div class="container">
            <a href="{{route('pok.index')}}">首页</a>
            <span>|</span><a href="{{route('pok.introduction')}}">关于我们</a>
            <span>|</span><a href="{{route('pok.product')}}">产品展示</a>
            <span>|</span><a href="{{route('pok.article')}}">新闻资讯</a>
            <span>|</span><a href="{{route('pok.cases')}}">工程案例</a>
            <span>|</span><a href="{{route('pok.contact')}}">联系我们</a>
        </div>
    </div>
    <div class="container clearfix">
        <div class="footer-logo img-center"><img src="/pok/images/foot.png" /></div>
        <div class="footer-info">
            <p>Copyright © 2020-{{date('Y', time())}} 澳镭照明 All Rights Reserved.</p>
            <p>电话：{{$settings['mobile']}}</p>
            <p>Q Q：<a href="tencent://message/?uin={{$settings['qq']}}&Menu=yes">{{$settings['qq']}}</a></p>
            <p>公司地址：{{$settings['address']}}</p>
            <p><a href="http://www.beian.miit.gov.cn/" rel="nofollow" target="_blank">{{$settings['record']}}</a></p>
        </div>
        <div class="footer-ewm"> <div class="img-center"><img src="/pok/images/wechat.jpg" /></div>微信扫一扫 </div>
    </div>
</div>

<div class="eyou-footer-fix">
    <ul class="clearfix">
        <li><a href="tel:{{$settings['mobile']}}"><i class="i1"></i>电话咨询</a></li>
        <li><a href="{{route('pok.product')}}"><i class="i2"></i>产品展示</a></li>
        <li><a href="{{route('pok.article')}}"><i class="i3"></i>新闻资讯</a></li>
        <li><a href="{{route('pok.index')}}"><i class="i4"></i>网站首页</a></li>
    </ul>
</div>

<!--[if lt IE 9]>
<div class="notsupport">
    <h1>:( 非常遗憾</h1>
    <h2>您的浏览器版本太低，请升级您的浏览器</h2>
</div>
<![endif]-->