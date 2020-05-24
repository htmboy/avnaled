<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta name="applicable-device" content="pc,wap">
    <meta name="MobileOptimized" content="width"/>
    <meta name="HandheldFriendly" content="true"/>
    <title>{{$title}}</title>
    <meta name="description" content="{{$description}}" />
    <meta name="keywords" content="{{$keywords}}" />
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/pok/css/swiper.min.css" />
    <link rel="stylesheet" type="text/css" href="/pok/css/eyou.css" />
    <script type="text/javascript" src="/pok/js/jquery.min.js"></script>
    <script type="text/javascript" src="/pok/js/swiper.min.js"></script>
    <script type="text/javascript" src="/pok/js/eyou.js"></script>
</head>

<body>

@include('pok.common.header')

@include('pok.common.search')

<div class="banner-sub img-center"> <img src="/pok/images/neiye.jpg"> </div>

<div class="container clearfix">
    <div class="ct2-sd">
        <div class="panel-sd">
            <div class="tit">关于我们</div>
            <ul class="lanmu">
                <li class="open active"> <a href="{{route('pok.introduction')}}">公司简介</a> </li>
                <li class=""> <a href="{{route('pok.history')}}">企业文化</a> </li>
            </ul>
        </div>

        @include('pok.common.recommendedProduct')


    </div>
    <div class="ct2-mn">
        <div class="position">当前位置： <a href='{{route('pok.index')}}' class=''>首页</a> &gt; <a href='{{route('pok.introduction')}}'>关于我们</a></div>
        <div class="mn-box">
            <div class="content-body">

                <p>● AOO澳镭照明-14年缔造LED工业照明领域首选服务品牌</p>
                <p>
                    14年累计生产安装工业级灯具50万套，累计为全国企业节省电费28亿广东澳镭照明电器有限公司始创于2006年，是一家集LED工业照明灯具研发、
                    生产、销售及LED工厂节能照明改造服务于一体的综合型照明企业。14年来，全国已经有3000多家工厂车间选择了澳镭照明的LED工业级节能照明改
                    造服务，累计灯具安装数量70万套，其中超过5年使用周期的灯具数量高达35万套。截止到2020年，澳镭总共为全国的合作工厂节省电费高达28亿元，
                    平均为每家工厂节省的电费超过120万元，而且这个数据还在持续增长中。澳镭照明，14年来为中国工厂的节能照明改造事业贡献了一份坚实的企业力
                    量，立志成为中国LED工业照明领域首选服务品牌。
                </p>
                <p>● 地处国家高新工业区，工厂占地39000平米，认证齐全，品质过硬</p>
                <p>
                    佛山，作为全国领先的工业制造示范基地，素有世界工厂的美誉。而澳镭照明的生产研发基地，正是位于佛山的工业制造中心--南海国家高新工业区。
                    工厂建筑面积39000平方米，拥有独立的LED模具车间、LED五金车间及LED组装车间，制造环节全面覆盖LED产业链上下游，并率先通过了国家ISO9001
                    质量管理体系认证、ISO14000环境管理认证及国家强制性3C产品认证，为制造品质过硬的LED灯具提供了可靠的技术保障。
                </p>
                <p>
                    ● 150多款工业照明LED灯具、覆盖180多种工业生产环境
                </p>
                <p>
                    14年来，澳镭照明已经在LED工业照明领域成功开发了150多款产品，其中LED工矿灯、LED投光灯、LED泛光灯、LED隧道灯、LED路灯等工业LED灯具
                    均为澳镭的核心产品。系列产品全面适用于各种大中小型工厂，安装高度全面覆盖3米到150米高的应用场景；工业防护全面覆盖防油、防尘、防腐、
                    防蚊虫；防火、防爆、防水、防雷击等多种复杂工业环境；应用范围全面覆盖食品、五金、化工、冶金、矿业、煤炭、公路、桥梁等多种使用环境，
                    真正做到以产品为客户解决一切照明烦恼。
                </p>
                <p>
                    ● 专利LED工业照明节能系统，真正做到让客户不花1分钱节省100万电费
                </p>
                <p>
                    同时，澳镭照明的LED工业照明节能管理系统也已经升级为3.0版本，结合品质过硬的工业级LED照明产品，真正做到让客户实现不花1分钱，节省100万电费的梦想；此外在产品质保环节真正为客户提供3年免维护，10年免换灯的保姆式售后服务。
                </p>
                <p>
                    ● 14年充实的人才、技术、现代化生产设备及世界级供应链的成熟储备
                </p>
                <p>
                    为了实现产品工业应用范围的全覆盖、领先行业标准的节能照明效果及高于行业标准的产品品质，最终创下13年为全国工厂节省电费28亿的骄人成绩，澳镭照明13年来做了充实的人才、技术、现代化生产设备及世界级供应链等成熟储备。
                </p>
                <img src="/pok/images/p-9.jpg" />

            </div>
        </div>
    </div>
</div>

@include('pok.common.footer')

</body>
</html>