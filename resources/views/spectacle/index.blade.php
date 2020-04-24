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
  <link href="/spectacle/css/base.css" rel="stylesheet">
  <link rel="shortcut icon" href="/favicon.png" />
  <!--[if IE 9]>
  <link href="/spectacle/css/ie9.css" rel="stylesheet">
  <![endif]-->
  <!--[if lt IE 9]>
  <link href="/spectacle/css/ie8.css" rel="stylesheet">
  <script src="/spectacle/js/html5shiv.min.js"></script>
  <![endif]-->
  <script src="/spectacle/js/index.js"></script>


  <link type="text/css" rel="stylesheet" href="/spectacle/css/slider.css">
  <link type="text/css" rel="stylesheet" href="/spectacle/css/owl.carousel.css">
  <script type="text/javascript" src="/spectacle/js/owl.carousel.min.js"></script>
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
<div id="header">
  <div class="header_top">
    澳镭照明工矿灯消费补贴火热进行中【官网】
    <span>
      <a href="javascript:void(0);" onClick="javascript:addBookmark(this)" title="收藏本站">收藏澳镭工矿灯</a>
      |
      <a href="/lxwm.html" title="联系我们">联系我们</a>
      |
      <a href="/sitemap.html" title="网站地图" target="_blank">网站地图</a>
    </span>
  </div>
</div><!--head_top-->
<div class="header_m">
  <h2><a href="/"><img src="/spectacle/img/logo.png" alt="澳镭照明工矿灯"></a></h2>
  <h3>工业照明领域首选服务品牌<em>SINCE  2007</em></h3>
  <h4>
    <p>免费咨询热线<em>400 6666 804</em></p>
    <span>专注工业照明13年</span>
  </h4>
</div><!--head_middle-->
<div class="header_nav">
  <ul id="nav" class="nav-bar ul-list">
    <li><a href="/">澳镭首页</a></li>
    <li><a href="/zsjm.html">案例抢先看</a></li>
    <li><a href="/sxmqq/">客户好评工矿灯</a>
      <ul>
        <li><a href="http://www.dhq898.com/sxmqq/tqmqsxmqq.html">星脉系列工矿灯</a></li>
        <li><a href="http://www.dhq898.com/sxmqq/tqdqsxmqq.html">紫铜系列工矿灯</a></li>
        <li><a href="http://www.dhq898.com/sxmqq/hbmqsxmqq.html">黑金刚系列工矿灯</a></li>
        <li><a href="http://www.dhq898.com/sxmqq/hbdqsxmqq.html">金钻系列工矿灯</a></li>
      </ul>
    </li>
    <li><a href="/sxqmq/">星脉系列三代工矿灯</a>
      <ul>
        <li><a href="http://www.dhq898.com/sxqmq/xqjjwqmq.html">星脉工矿灯100w</a></li>
        <li><a href="http://www.dhq898.com/sxqmq/cqxjwqmq.html">星脉工矿灯150w</a></li>
        <li><a href="http://www.dhq898.com/sxqmq/qgljwqmq.html">星脉工矿灯200w</a></li>
        <li><a href="http://www.dhq898.com/sxqmq/qxdqsxqmq.html">星脉工矿灯250w</a></li>
        <li><a href="http://www.dhq898.com/sxqmq/qxdqsxqmq.html">星脉工矿灯更多瓦数</a></li>
      </ul>
    </li>
    <li><a href="/products/">产品中心</a>
      <ul>
        <li><a href="/sxmqq/">工矿灯</a></li>
        <li><a href="/sxqmq/">泛光灯</a></li>
        <li><a href="/wqtl/">投光灯</a></li>
        <li><a href="/sxdbq/">防爆灯</a></li>
        <li><a href="/sxhwmq/">路灯</a></li>
      </ul>
    </li>
    <li><a href="/help/">解决方案</a>
      <ul>
        <li><a href="/sxqjc/">焕新服务</a></li>
        <li><a href="/wddiy/">施工服务</a></li>
        <li><a href="/alzs/">装灯案例</a></li>
        <li><a href="/help/">常见问题</a></li>
      </ul>
    </li>
    <li><a href="/news/">新闻中心</a>
      <ul>
        <li><a href="/dhkx/">澳镭快讯</a></li>
        <li><a href="/hyxw/">行业新闻</a></li>
        <li><a href="/shiping/">案例前线</a></li>
      </ul>
    </li>
  </ul>
</div><!--head_nav-->

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
<div class="home_ss">
  <div class="content">
    <div class="home_ss_l">
      <b>他们还在搜：</b>
      <a href="/sxmqq/">13米厂房照明灯</a>
      |
      <a href="/sxqmq/">工矿灯品牌</a>
      |
      <a href="/sxhwmq/">工矿灯批发</a>
      |
      <a href="/sxdbq/">工矿灯厂家</a>
      |
      <a href="/sxdbq/">厂房照明灯</a>
    </div>
    <div class="home_ss_r"><form name="searchForm" method="get" action="/search/">
        <input type="text" onclick="this.value=''" name="keyword" class="inp01" value="led工矿灯" onfocus="if(this.value=='工矿灯'){this.value='';}"  onblur="if(this.value==''){this.value='想要咨询哪款灯具呢';}" />
        <input type="submit" value="" class="inp02" />
      </form></div>
  </div>
</div>
<!--search-->
<div class="ds" style="margin-bottom:50px">
  <div class="tit1">
    <a href="/products/" title="大荷水性漆">
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
      <h3><img src="/spectacle/img/ds1.jpg" alt="水性漆涂料加盟"></h3>
      <h4><img src="/spectacle/img/ds2.jpg" alt="乳胶漆涂料加盟"></h4>
    </div>
  </div>
</div>
<!--ds-->

<div class="bz">
  <div class="content">
    <div class="tit1">
      <a href="/products/" title="" target="_blank">
        六大品质 买得放心<em>Six qualities for buying with confidence</em>
      </a>
      <span>共同见证澳镭品质</span>
    </div>
    <div class="bz2">
      <dl class="dl01">
        <dt><em>01</em>品质高端</dt>
        <dd>3年免维护的<b>工业级</b>产品结构设计</dd>
      </dl>
      <dl class="dl02">
        <dt><em>02</em>配置一流</dt>
        <dd>全部采用工业级电子配件<b>免除工程商售后烦恼</b></dd>
      </dl>
      <dl class="dl03">
        <dt><em>03</em>全网营销 塑造品牌</dt>
        <dd><b>全网营销</b>模式提升品牌知名度，与当地加盟商O2O互动获取更多盈利渠道。</dd>
      </dl>
      <dl class="dl04">
        <dt>专业团队 全程帮扶<em>04</em></dt>
        <dd>定期指派水性漆应用专家驻点加盟商，提供运营协助及技术支持，<b>量身定制适合当地的运营方案</b></dd>
      </dl>
      <dl class="dl05">
        <dt>品种齐全 质量优异<em>05</em></dt>
        <dd><b>六大系列产品</b>，专业的调色系统和配套的辅料产品；环保健康，性能优异</dd>
      </dl>
      <dl class="dl06">
        <dt>三年免费 质保售后<em>06</em></dt>
        <dd>提供<b>三年免费质保</b>售后无忧服务</dd>
      </dl>
    </div>
  </div>
</div>
<!--bz-->
<div class="jm">
  <div class="tit1"><a href="/jmjz/" target="_blank">大荷合伙人<em>Franchisees to witness</em></a><span>全国各地一批有实力的加盟商陆续加入</span></div>
  <div class="jm2">
    <div class="cccc">
      <dl>
        <dt><a href="/jmjz/20160810-54.html" target="_blank"><img src="/spectacle/img/57aaa0d6ca648.jpg" alt="深圳梨园旗舰店" title="深圳梨园旗舰店" /></a></dt>
        <dd>
          <p>深圳赵睿：“深圳装修万家客户的见证”，2006年我从广州一家事业单位辞职出来创业,一直从事着水性漆的产品销售和服务工作。2009年开始加盟大荷水性漆，成了该品牌的第一个加盟商，在深圳拥有罗湖梨园店和福田香蜜湖世纪中心店两个专卖店。截止2015年底我和我的团队服务过9,123家近万户客户，取得了良好的市场反映和口碑。2015年7月的“禁油令”深圳率先开始，我们的生意确实比往年要好了不少。</p>
          <span><a href="/jmjz/20160810-54.html" target="_blank">深圳梨园旗舰店 +</a></span></dd>
      </dl>
      <dl>
        <dt><a href="/jmjz/20160810-57.html" target="_blank"><img src="/spectacle/img/57aaa9d4a41d2.jpg" alt="杭州西湖旗舰店" title="杭州西湖旗舰店" /></a></dt>
        <dd>
          <p>杭州余良杰：2015年初在深圳我姑父那里了解到大荷水性漆,姑姑与姑父是在深圳做高端家居家具产品生产销售的企业老板,但我却选择了大荷,是因为更看好该品牌的水性漆市场前景,回来杭州与自己九个90后的同学和朋友一起创业,2016年初大荷杭州西湖旗舰店开业了......</p>
          <span><a href="/jmjz/20160810-57.html" target="_blank">杭州西湖旗舰店 +</a></span></dd>
      </dl>
      <dl>
        <dt><a href="/jmjz/20160810-55.html" target="_blank"><img src="/spectacle/img/57aaa7fad65aa.jpg" alt=" 茂名亿丰旗舰店" title=" 茂名亿丰旗舰店" /></a></dt>
        <dd>
          <p>茂名柯文行：我曾经经营五金油漆类产品,近几年发现油漆开始慢慢被市场摒弃生意越来越难做了,人们对环保装修的重视,政府对溶剂型涂料的限制,让我感觉危机正在来临。正当我在寻找出路想转型的时候，经朋友介绍了解到大荷水性漆，非常欣喜地发现这个产品正是我想要找的油漆替代品。在看了该产品的各方面性能和漂亮的涂装效果后，2015年春节后我马上行动，申请到大荷公司在茂名地区的经销权</p>
          <span><a href="/jmjz/20160810-55.html" target="_blank"> 茂名亿丰旗舰店 +</a></span></dd>
      </dl>
    </div>
    <div class="p01"><a href="javascript:;"></a></div>
    <div class="p02"><a href="javascript:;"></a></div>
  </div>
  <div class="jmmore"><a href="http://chat.talk99.cn/chat/chat/p.do?c=10040101&f=10068155&g=10066948" rel="nofollow" title="现在加盟" target="_blank">现在加盟</a></div>
</div>
<!--jm-->
<div class="new" style="margin-bottom:50px">
  <div class="tit1"><a href="/news/" title="资讯中心" target="_blank">资讯中心<em>latest　news</em></a></div>
  <div class="content">
    <div class="dy fl">
      <div class="tit2"><span class="fr"><a href="/hyxw/" title="more" target="_blank">more +</a></span><a href="/hyxw/" title="行业新闻" target="_blank">行业新闻/<span>NEWS</span></a></div>
      <dl>
        <dt><a href="/hyxw/20190912-743.html" target="_blank"><img src="/spectacle/img/5d7a15c220b8a.jpg" alt="水性漆该如何选择？看完就是专家" style="display: block;"></a></dt>
        <dd>
          <h3><a href="/hyxw/20190912-743.html" target="_blank">水性漆该如何选择？看完就是专家</a></h3>
          <p>一、要清楚是用什么树脂制造的水性漆，水性树脂分类非常清晰，各类树脂性能、功能和价格不一或相差甚大，直接影响水性漆的品质、性能、效果和成本，一定要选择能满足自己需求的产品。</p>
        </dd>
      </dl>
      <dl>
        <dt><a href="/hyxw/20190909-740.html" target="_blank"><img src="/spectacle/img/5d761fc9b4dd2.jpg" alt="装修小白提问：水性漆到底好在哪里？" style="display: block;"></a></dt>
        <dd>
          <h3><a href="/hyxw/20190909-740.html" target="_blank">装修小白提问：水性漆到底好在哪里？</a></h3>
          <p>装修之所以会让人头大，是因为很多人担心甲醛，而甲醛挥发的途径，大部分来源于胶黏剂和漆。墙面刷漆、家具表面也离不开刷漆。现在环保理念比较强的水性漆到底好在哪里？下面，就和小编一起来看看吧！</p>
        </dd>
      </dl>
      <dl>
        <dt><a href="/hyxw/20190902-735.html" target="_blank"><img src="/spectacle/img/5d6ce81773d9a.jpg" alt="简述实木家具翻新刷木器漆流程" style="display: block;"></a></dt>
        <dd>
          <h3><a href="/hyxw/20190902-735.html" target="_blank">简述实木家具翻新刷木器漆流程</a></h3>
          <p>实木家具使用多年以后，不可避免的会出现脱漆、开裂、变色等情况，这时候就需要进行翻新。可是，实木家具如何翻新刷漆是一种麻烦事，毕竟许多人不会接触这方面的知识，现在，小编就为大家简单讲解一下一些翻新的方法。</p>
        </dd>
      </dl>
    </div>
    <div class="dy dy2 fl">
      <div class="tit2"><span class="fr"><a href="/dhkx/" title="more" target="_blank">more +</a></span><a href="/dhkx/" title="大荷快讯" target="_blank">大荷快讯/<span>INFORMATION</span></a></div>
      <dl>
        <dt><a href="/dhkx/20190225-523.html" target="_blank"><img src="/spectacle/img/5c73b3bd97fbe.jpg" title="墙面装修乳胶漆色彩搭配要注意哪些事项" style="display: block;"></a></dt>
        <dd>
          <h3><a href="/dhkx/20190225-523.html" target="_blank">墙面装修乳胶漆色彩搭配要注意哪些事项</a></h3>
          <p>无论哪种装修风格，都需要借助墙面乳胶漆颜色搭配，才能达到满意的效果。在众多的装修注意事项中，乳胶漆色彩搭配技巧是其中比较重要的，那么，墙面装修乳胶漆色彩搭配要注意哪些事项。</p>
        </dd>
      </dl>
      <dl>
        <dt><a href="/dhkx/20190222-518.html" target="_blank"><img src="/spectacle/img/5c6faafd774a8.jpg" title="乳胶漆装修要有“料” 切忌盲目追随流行色" style="display: block;"></a></dt>
        <dd>
          <h3><a href="/dhkx/20190222-518.html" target="_blank">乳胶漆装修要有“料” 切忌盲目追随流行色</a></h3>
          <p>装修使用健康家居色彩，切忌盲目追随流行色，让家装色彩成就健康生活。特别是乳胶漆装修色彩搭配非常重要，下面小编带大家一起了解一下，乳胶漆色彩要怎么搭配吧。</p>
        </dd>
      </dl>
      <dl>
        <dt><a href="/dhkx/20190221-517.html" target="_blank"><img src="/spectacle/img/5c6e70b7b8902.jpg" title="墙面装饰是刷乳胶漆还是贴墙纸" style="display: block;"></a></dt>
        <dd>
          <h3><a href="/dhkx/20190221-517.html" target="_blank">墙面装饰是刷乳胶漆还是贴墙纸</a></h3>
          <p>大多数朋友家庭装修选择刷乳胶漆或者贴墙纸，也是常见的两种墙面装饰方式，乳胶漆和墙纸都有各自不同的特点，没有好坏优劣之分，主要还是看自身的要求。下面就和小编一起来看看乳胶漆与墙纸对比，希望大家看完后能够做出正确的选择！</p>
        </dd>
      </dl>
    </div>
    <div class="faq fr">
      <div class="tit2"><span class="fr"><a href="/help/" title="more" target="_blank">more +</a></span><a href="/help/" title="常见问答" target="_blank">常见问答/<span>QUESTIONS</span></a></div>
      <h4><a href='/help/'><img src='/spectacle/img/20160520111402_6290.jpg' alt='大荷水性漆常见问答分类广告' /></a></h4>
      <div class="faq2" id="cjwt">
        <dl>
          <dt><a href="/help/20200420-885.html" target="_blank">实木油漆翻新家具容易出现哪些问题</a></dt>
          <dd>家具翻新是现代家庭中常有的事，眼看着伴随自己多年的木质家具变旧，还是有些不舍得扔，由此选择翻新一下就可继续用。那么，实木油漆翻新家具容易出现哪些问题？下面，跟小编一起来看看吧。</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200417-884.html" target="_blank">涂刷木器漆时如何处理板材基层？</a></dt>
          <dd>家庭装修施工时木工固然重要，但木材阶段的重点又是涂刷木器漆，施工效果将影响整个家装的效果，而木器漆施工木材基层打磨、上浆都很重要，我们应如何处理板材基层呢？下面，就跟小编一起来看看吧！</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200416-883.html" target="_blank">家具油漆对人体都有哪些危害</a></dt>
          <dd>家具油漆是家具装饰中必不可缺少的一项材料，美化家具的同时还能起到保护家具的作用。但是，家具油漆的危害并不是人人都知道，今天，小编就来给大家介绍下：家具油漆对人体都有哪些危害，以及要怎么去防范。</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200415-882.html" target="_blank">解析：双组份水性漆所具备的优缺点</a></dt>
          <dd>双组份水性木器漆比起常见的单组份水性木器漆，有着更好的综合性能。因为它在单组份水性漆的基础上，加入了固化剂协助成膜，所以，双组份水性木器漆是化学反应成膜，其综合性能都得到了显著提高。</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200413-880.html" target="_blank">实木家具刷水性木器漆的作用</a></dt>
          <dd>日常生活中，家具木器漆的作用一般可以概括为三个方面：保护作用、装饰作用，以及特殊功能作用。通常，木器漆的重要性首先体现在保护作用上，在达到保护作用后才具有良好的装饰作用。今天，小编就来给大家讲解一下：实木家具刷水性木器漆的作用。</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200411-879.html" target="_blank">实木家具选择水性漆更环保</a></dt>
          <dd>家具木器漆装修是讲究风格的，而风格往往是取决于业主们的审美观，也是房屋的魅力所在。但，从另一角度来看，家装又是没有风格的，因为选择任何装修风格其最终目的都是让生活变得更加美好，而环保、健康的环境就是美好生活的最大前提。</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200410-878.html" target="_blank">怎么辨别水性木器漆是否刷得完美？</a></dt>
          <dd>在木器家具装修中，水性木器漆一方面能美化木材表面的缺陷，另一方面能保护木材本身。那么，怎么辨别水性木器漆是否刷得完美？下面，小编给大家分享一些经验。</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200409-877.html" target="_blank">自己动手刷木器漆应该注意些什么？</a></dt>
          <dd>如今不少人在家装时，会自己动手刷木器漆，但很多时候，自己刷的木器漆会问题出现一些问题，比如，这块不平整，那块露底。通常这种时候，我们需要掌握一些刷漆的注意事项，今天，跟小编一起看看自己动手刷木器漆应该注意些什么？</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200408-876.html" target="_blank">实木家具涂木蜡油还是木器漆好？</a></dt>
          <dd>很多人在选择实木家具的时候，是因为喜欢它的自然美，带着清晰可辨的木纹，触摸质感。但为了保护实木家具使其长命不衰，不少人选择用油漆涂料等来装修它。如果你喜欢的是家具自然美，那么可以考虑用实木家具清漆或者木蜡油。</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200407-875.html" target="_blank">揭秘：木器漆漆膜也需要保养？</a></dt>
          <dd>我们都知道，木器漆除了可以让家具看起来更漂亮，还能起到保护家具和掩盖缺点的功效。但不知道大家在木器漆施工完成后，有没有经常给家具做保养措施呢？下面，小编教大家几种保养方法，希望帮到大家。</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200406-874.html" target="_blank">家装现场涂刷木器漆常见三个问题</a></dt>
          <dd>家里装修过的朋友都知道，在装修现场涂刷木器漆总会遇见一些小问题，那么有哪些问题呢？下面，就由小编来为大家讲解一下，家装现场涂刷木器漆常见三个问题，希望大家有所谨记。</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200404-873.html" target="_blank">家具补漆需要注意的几个细节</a></dt>
          <dd>给家具补漆是一项技术活，很多细节是不容忽视的。今天，小编要给大家介绍下，家具补漆需要注意的几个细节，一起来看看吧！</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200403-872.html" target="_blank">内外墙涂料性能大揭秘，两者有何不同？</a></dt>
          <dd>墙面涂料有内墙涂料和外墙涂料之分，很多人会有疑问：内墙涂料和外墙涂料能混用吗？严格来讲是不行的，因为两者的性能是有区别的。今天，小编要给大家介绍下内外墙涂料的区别，希望对大家有所帮助！</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200402-871.html" target="_blank">专业油漆工涂刷墙面漆标准步骤</a></dt>
          <dd>墙面漆施工想要获得好的涂装效果，就需要按照施工的规范进行，做好每一个步骤。今天，小编给大家分享下，专业油漆工涂刷墙面漆标准步骤，希望对大家有所帮助！</dd>
        </dl>
        <dl>
          <dt><a href="/help/20200401-870.html" target="_blank">外墙漆不能用作内墙涂刷的原因是什么？</a></dt>
          <dd>外墙漆和内墙漆都属于墙面漆的范畴，虽然两者的基本性能也差不多，但是不建议将外墙漆用作内墙涂刷。今天，小编就给大家介绍下，外墙漆不能用作内墙涂刷的原因是什么？一起来看看吧！</dd>
        </dl>
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
  <div class="tit1"><a href="/alzs/" target="_blank">客户案例<em>Cases Show</em></a></div>
  <div class="fangan_main">
    <div id="fangan" class="owl-carousel" style="width:1080px">
      <div class="item"> <a href="/alzs/20200421-886.html"><img src="/spectacle/img/5e9eb43e2e1b9.png" alt="「和风煦日」阳明山庄经典美式（三米家居设计）" /></a>
        <div class="txt">「和风煦日」阳明山庄经典美式（三米家居设计）</div>
      </div>
      <div class="item"> <a href="/alzs/20200414-881.html"><img src="/spectacle/img/5e957e436f44e.png" alt="「温润如歌」凯旋城休闲北欧（三米家居设计）" /></a>
        <div class="txt">「温润如歌」凯旋城休闲北欧（三米家居设计）</div>
      </div>
      <div class="item"> <a href="/alzs/20180626-352.html"><img src="/spectacle/img/5b31f7a3c06c5.png" alt="带你走进设计师的家--我的家是处女座" /></a>
        <div class="txt">带你走进设计师的家--我的家是处女座</div>
      </div>
      <div class="item"> <a href="/alzs/20180619-346.html"><img src="/spectacle/img/5b28ee8b67c28.png" alt="香格丽苑·幽草涧--温润中式（深蓝设计）" /></a>
        <div class="txt">香格丽苑·幽草涧--温润中式（深蓝设计）</div>
      </div>
      <div class="item"> <a href="/alzs/20180530-330.html"><img src="/spectacle/img/5b0e8daaa8585.JPG" alt="旧房里的新色彩，大荷水性漆来点缀（嘉合缘设计）" /></a>
        <div class="txt">旧房里的新色彩，大荷水性漆来点缀（嘉合缘设计）</div>
      </div>
      <div class="item"> <a href="/alzs/20180523-324.html"><img src="/spectacle/img/5b054d3ed61f1.JPG" alt="宁静致远，宜室宜家，这才是繁华都市的诗意栖居（嘉合缘设计）" /></a>
        <div class="txt">宁静致远，宜室宜家，这才是繁华都市的诗意栖居（嘉合缘设计）</div>
      </div>
      <div class="item"> <a href="/alzs/20180509-312.html"><img src="/spectacle/img/5af2dc90cf104.jpg" alt="本味--找寻生活本来的味道（墨点设计）" /></a>
        <div class="txt">本味--找寻生活本来的味道（墨点设计）</div>
      </div>
      <div class="item"> <a href="/alzs/20180428-304.html"><img src="/spectacle/img/5ae430032ed8a.jpg" alt="华晖云门——美式轻奢，惊艳整个家（三米设计）" /></a>
        <div class="txt">华晖云门——美式轻奢，惊艳整个家（三米设计）</div>
      </div>
      <div class="item"> <a href="/alzs/20180419-299.html"><img src="/spectacle/img/5ad83609cdd68.jpg" alt="摩登骑士风范的精致城市生活美学家装（导火牛设计）" /></a>
        <div class="txt">摩登骑士风范的精致城市生活美学家装（导火牛设计）</div>
      </div>
      <div class="item"> <a href="/alzs/20180315-291.html"><img src="/spectacle/img/5aaa0a2e93dcb.jpg" alt="走进热带丛林的梦想家（三米设计）大荷漆案例" /></a>
        <div class="txt">走进热带丛林的梦想家（三米设计）大荷漆案例</div>
      </div>
      <div class="item"> <a href="/alzs/20180205-285.html"><img src="/spectacle/img/5a77fce5887dd.jpg" alt="紫鱼——汇龙湾鱼姐的紫色格调家（三米设计）" /></a>
        <div class="txt">紫鱼——汇龙湾鱼姐的紫色格调家（三米设计）</div>
      </div>
      <div class="item"> <a href="/alzs/20180125-279.html"><img src="/spectacle/img/5a6985bb8bdcc.jpg" alt="《陪伴——》记本年度最美榜样房  大荷水性漆" /></a>
        <div class="txt">《陪伴——》记本年度最美榜样房  大荷水性漆</div>
      </div>
      <div class="item"> <a href="/alzs/20171222-270.html"><img src="/spectacle/img/5a40aecb9d6da.JPG" alt="深圳波托菲诺纯水岸豪宅设计（思迪设计）" /></a>
        <div class="txt">深圳波托菲诺纯水岸豪宅设计（思迪设计）</div>
      </div>
      <div class="item"> <a href="/alzs/20171213-264.html"><img src="/spectacle/img/5a311697b0807.jpg" alt="大荷水性家具漆演绎高雅简约中式风（深蓝设计）" /></a>
        <div class="txt">大荷水性家具漆演绎高雅简约中式风（深蓝设计）</div>
      </div>
      <div class="item"> <a href="/alzs/20171122-255.html"><img src="/spectacle/img/5a153c3581b6a.jpg" alt="瞳之书屋——给孩子一个安全健康的阅读环境（墨点设计）" /></a>
        <div class="txt">瞳之书屋——给孩子一个安全健康的阅读环境（墨点设计）</div>
      </div>
    </div>
  </div>
</div>
<!--/案例展示-->
<script type="text/javascript" src="/spectacle/js/slider.js"></script>

<div class="footer">
  <div class="foot">
    <div class="foot_t">
      <ul class="foot_link" style="width:118px">
        <h3>产品系列</h3>
        <li><a href="/sxmqq/">星脉系列工矿灯</a></li>
        <li><a href="/sxqmq/">黑豹系列泛光灯</a></li>
        <li><a href="/sxdbq/">天梭系列飞碟灯</a></li>
        <li><a href="/sxhwmq/">瑞星系列投光灯</a></li>
      </ul>
      <ul class="foot_link" style="width:118px">
        <h3>招商加盟</h3>
        <li><a href="/jmys.html">加盟优势</a></li>
        <li><a href="/jmtj.html">加盟条件</a></li>
        <li><a href="/jmlc.html">加盟流程</a></li>
        <li><a href="/jmjz/">客户见证</a></li>
      </ul>
      <ul class="foot_link" style="width:118px">
        <h3>澳镭品牌</h3>
        <li><a href="/gsjjz.html">关于澳镭</a></li>
        <li><a href="/fzlc.html">发展历程</a></li>
        <li><a href="/dhkx">澳镭动态</a></li>
        <li><a href="/qiyewenhua">企业文化</a></li>
      </ul>
      <div class="foot_code" style="width:490px">
        <ul class="code">
          <li>
            <img src="/spectacle/img/indimg30.gif" width="80" height="80" alt="大荷漆" title="大荷漆" align="" />
            <em>微信公众号</em>
          </li>
          <li>
            <img src="/spectacle/img/indimg30.gif" alt="大荷水性漆" title="大荷水性漆" width="80" height="80" align="" />
            <em>手机客户端</em>
          </li>
        </ul>
        <p>服务热线：400 6666 804</p>
        <p class="p02">咨询电话：18923117087</p>
        <p class="p03">总经理信箱：755930694@qq.com</p>
        <p class="p04">地址：广东省佛山市南海区罗村华南国际LED电光源灯饰城C区8路36~38栋</p>
      </div>
    </div>
    <div class="copyright">
      版权所有 &copy;{{date('Y'), time()}} 广东澳镭照明电器有限公司, All Rights Reserved. &nbsp;备案号:
      <a href="http://www.beian.miit.gov.cn" title="粤ICP备10222602号-2" target="_blank" rel="nofollow">粤ICP备10222602号-2</a>
      <span style="white-space:normal;"> </span>
      <span style="white-space:normal;"></span>
    </div>
    <div class="frilinks">
      @foreach($links as $link)
      <a href="http://{{$link->$link}}" target="_blank">{{$link->name}}</a>
      @endforeach
    </div>
    <div class="frilinksSubmit">
      <a href="javascript:;" class="wap_qq">联系QQ:755930694</a>
    </div>
  </div>
</div>
<!--footer-->
<div id="roll" style="display:none"><div title="回到顶部" id="roll_top"></div></div>

<script type="text/javascript" src="/spectacle/js/nav.hover.js"></script>
<script type="text/javascript" src="/spectacle/js/open_qq_chat.js"></script>

</body>

</html>