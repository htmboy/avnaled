<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="renderer" content="webkit" />
  <title>{{$title}}</title>
  <meta name="title" content="{{$title}}">
  <meta name="keywords" content="{{$keywords}}" />
  <meta name="description" content="{{$description}}" />
  <link href="/avnaled/css/base.css" rel="stylesheet">
  <link rel="shortcut icon" href="/favicon.png" />
  <script src="/avnaled/js/index.js"></script>
  <link type="text/css" rel="stylesheet" href="/avnaled/css/slider.css">
  <link type="text/css" rel="stylesheet" href="/avnaled/css/owl.carousel.css">
  <script type="text/javascript" src="/avnaled/js/owl.carousel.min.js"></script>
  <script type="text/javascript">

    $(function(){
      $('#fangan').owlCarousel({
        items: 5,
        autoPlay: true,
        navigation: true,
        navigationText: ["",""],
        scrollPerPage: false
      });
    });
  </script>

</head>
<body>
@include('avnaled.common.header')
<!--head_nav-->

<div class="banner">
  <div id="slide" class="slide">
    @foreach($carousels as $carousel)
    <div class="slide-item">
      <a href="http://{{$carousel->link}}">
        <img src="/storage/{{$carousel->site}}" alt="{{$carousel->alt}}" width="1920" height="527" />
      </a>
    </div>
    @endforeach
    <div class="slide-prev"></div>
    <div class="slide-next"></div>
    <div class="slide-paging"></div>
  </div>
</div>
<!--banner-->
@include('avnaled.common.search')
<!--search-->
<div class="ds" style="margin-bottom:50px">
  <div class="tit1">
    <a href="/avnaled/product.html">
      澳镭照明工矿灯 用灯光点亮世界<em>Light the world with aooled</em>
    </a>
    <span>13年生产研发和9年装灯经验</span></div>
  <div class="ds2">
    <div class="content">
      <dl class="dl01">
        <dt>地处国家高新工业区，认证齐全，品质过硬</dt>
        <dd>通过了国家ISO9001质量管理体系认证、ISO14000环境管理认证及国家强制性3C产品认证，为制造品质过硬的LED灯具提供了可靠的技术保障</dd>
      </dl>
      <dl class="dl02">
        <dt>多款工业照明灯具，覆盖180多种生产环境</dt>
        <dd>系列产品适用于各种大中小型工厂，安装高度覆盖3米到150米高的应用场景；工业防护全面覆盖防油、防尘、防腐、防蚊虫；防火、防爆、防水、防雷击等多种复杂工业环境</dd>
      </dl>
      <dl class="dl03">
        <dt>13年坚守品质至上和客户第一的理念</dt>
        <dd>为中国工厂的LED节能照明改造事业贡献出一份坚实的企业力量及科学先进的工业级LED照明产品。成为中国LED工业照明领域首选服务品牌！</dd>
      </dl>
      <dl class="dl04">
        <dt>专利LED工业照明节能系统</dt>
        <dd>工业照明节能管理系统也已经升级为3.0版本，领先行业标准的节能照明效果及高于行业标准的产品品质</dd>
      </dl>
      <h3><img src="/avnaled/img/ds1.jpg" alt="水性漆涂料加盟"></h3>
      <h4><img src="/avnaled/img/ds2.jpg" alt="乳胶漆涂料加盟"></h4>
    </div>
  </div>
</div>
<!--ds-->

<div class="bz">
  <div class="content">
    <div class="tit1">
      <a href="/avnaled/product.html" title="" target="_blank">
        六大产品共同特性介绍<em>Six qualities for buying with confidence</em>
      </a>
      <span>六大品质保障为您的工厂及客户提供一站式的保姆服务</span>
    </div>
    <div class="bz2">
      <dl class="dl01">
        <dt><em>01</em><br/>超过6万个国内大中小型工厂车间共同验证</dt>
        <dd></dd>
      </dl>
      <dl class="dl02">
        <dt><em>02</em><br/>真正符合国标3年质保的工业级产品配置</dt>
        <dd></dd>
      </dl>
      <dl class="dl03">
        <dt><em>03</em><br/>德国欧司朗工业芯片战略合作厂家</dt>
        <dd></dd>
      </dl>
      <dl class="dl04">
        <dt><em>04</em><br/>真正专为国内生产型工厂车间使用环境研发</dt>
      </dl>
      <dl class="dl05">
        <dt><em>05</em><br/>产品全部通过国际最高标准PM-80半导体老化检测</dt>
      </dl>
      <dl class="dl06">
        <dt><em>06</em><br/>真正国标3c认证全球通用宽压稳压恒流工业专用驱动</dt>
        <dd></dd>
      </dl>
    </div>
  </div>
</div>
<!--bz-->
<div class="jm">
  <div class="tit1">
    <a href="/avnaled/product/1.html" target="_blank">
      产品中心<em>Franchisees to witness</em>
    </a>
    <span>澳镭照明工业级照明专用系列LED工矿灯</span></div>
  <div class="jm2">
    <div class="cccc">
      @foreach($products as $product)
      <dl>
        <dt>
          <a href="/avnaled/product/detail/{{$product->id}}.html" target="_blank">
            <img src="/storage/{{$product->thumbnail}}" alt="{{$product->title}}"/>
          </a>
        </dt>
        <dd>
          <p>{{$product->characteristic}}</p>
          <span>
            <a href="/avnaled/product/detail/{{$product->id}}.html" target="_blank">{{$product->title}}</a>
          </span>
        </dd>
      </dl>
      @endforeach
    </div>
    <div class="p01">
      <a href="javascript:;"></a>
    </div>
    <div class="p02">
      <a href="javascript:;"></a>
    </div>
  </div>
  <div class="jmmore">
    <a href="http://wpa.qq.com/msgrd?v=3&uin=755930694&site=qq&menu=yes" rel="nofollow" title="现在咨询" target="_blank">
      现在咨询
    </a>
  </div>
</div>
<!--jm-->
<div class="new" style="margin-bottom:50px">
  <div class="tit1"><a href="/avnaled/article.html" title="新闻中心" target="_blank">新闻中心<em>latest　news</em></a></div>
  <div class="content">
    <div class="dy fl">
      <div class="tit2">
        <span class="fr">
          <a href="/avnaled/article/4.html" title="more" target="_blank">more +</a>
        </span>
        <a href="/avnaled/article/4.html" title="行业新闻" target="_blank">
          行业新闻/
          <span>NEWS</span>
        </a>
      </div>
      @foreach($news as $new)
      <dl>
        <dt>
          <a href="/avnaled/article/detail/{{$new->id}}.html" target="_blank">
            <img src="/storage/{{$new->thumbnail}}" style="display: block;">
          </a>
        </dt>
        <dd>
          <h3>
            <a href="/avnaled/article/detail/{{$new->id}}.html" target="_blank">
              {{$new->title}}
            </a>
          </h3>
          <p>{{mb_substr(strip_tags($new->content), 0, 40)}}</p>
        </dd>
      </dl>
      @endforeach
    </div>
    <div class="dy dy2 fl">
      <div class="tit2">
        <span class="fr">
          <a href="/avnaled/article/1.html" title="more" target="_blank">more +</a>
        </span>
        <a href="/avnaled/article/1.html" title="澳镭动态" target="_blank">
          澳镭动态/
          <span>INFORMATION</span>
        </a>
      </div>
      @foreach($conpany_news as $conpany_new)
      <dl>
        <dt>
          <a href="/avnaled/article/detail/{{$conpany_new->id}}.html" target="_blank">
            <img src="/storage/{{$conpany_new->thumbnail}}" title="{{$conpany_new->title}}" style="display: block;">
          </a>
        </dt>
        <dd>
          <h3>
            <a href="/avnaled/article/detail/{{$conpany_new->id}}.html" target="_blank">{{$conpany_new->title}}</a>
          </h3>
          <p>{{mb_substr(strip_tags($conpany_new->content), 0, 40)}}</p>
        </dd>
      </dl>
      @endforeach
    </div>
    <div class="faq fr">
      <div class="tit2">
        <span class="fr">
          <a href="/avnaled/article/3.html" target="_blank">more +</a>
        </span>
        <a href="/avnaled/article/3.html" target="_blank">常见问答/<span>QUESTIONS</span></a>
      </div>
      <h4>
        <a href='/avnaled/article/3.html'>
          <img src='/avnaled/img/20160520111402_6290.jpg' alt='常见问答' />
        </a>
      </h4>
      <div class="faq2" id="cjwt">
        @foreach($answers as $answer)
        <dl>
          <dt>
            <a href="/avnaled/article/detail/{{$answer->id}}.html" target="_blank">
              {{$answer->title}}
            </a>
          </dt>
          <dd>{{mb_substr(strip_tags($answer->content), 0, 400)}}</dd>
        </dl>
        @endforeach
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(function () {
    new Marquee("cjwt", 0, 1, 328, 283, 35, 0, 2000, 22);
  });
</script>
<!--new-->
<div class="fangan">
  <div class="tit1"><a href="/avnaled/article/2.html" target="_blank">客户案例<em>Cases Show</em></a></div>
  <div class="fangan_main">
    <div id="fangan" class="owl-carousel" style="width:1080px">
      @foreach($cases as $case)
      <div class="item">
        <a href="/avnaled/article/detail/{{$case->id}}.html">
          <img src="/storage/{{$case->thumbnail}}" alt="{{$case->title}}" />
        </a>
        <div class="txt">{{$case->title}}</div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!--/案例展示-->
<script type="text/javascript" src="/avnaled/js/slider.js"></script>

@include('avnaled.common.footer')
<!--footer-->
<div id="roll" style="display:none"><div title="回到顶部" id="roll_top"></div></div>

<script type="text/javascript" src="/avnaled/js/nav.hover.js"></script>
<script type="text/javascript" src="/avnaled/js/open_qq_chat.js"></script>

</body>

</html>