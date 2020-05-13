$(function () {
	//banner

	function showbg(e) { var t = $("#flashs .btn span").index($("#flashs .btn span.cur")); t < 0 && (t = 0), $("#flashs .btn span.cur").css("opacity", .7).removeClass("cur"), $("#flashbg" + t).css({ opacity: 0, "z-index": 1 }), $("#flashbg" + showIndex).css({ "z-index": 2 }), $("#flashbg" + showIndex).animate({ opacity: 1 }, 500), $("#flashs .btn span").eq(showIndex).css("opacity", 1).addClass("cur") } var showIndex = 1, h = $("#flashs div.bgitem").css("opacity", 0).length, btn = "<div class='btn'>"; for (var i = 0; i < h; i++) btn += "<span>" + (i + 1) + "</span>"; btn += "</div>", $("#flashs").append(btn), $("#flashs .btn span").css("opacity", .7).mouseenter(function () { showIndex = $("#flashs .btn span").index(this), showbg(showIndex) }).eq(0).trigger("mouseenter"), $("#flashs").hover(function () { clearInterval(picTimer) }, function () { picTimer = setInterval(function () { showIndex++, showIndex == h && (showIndex = 0), showbg(showIndex) }, 5e3) }).eq(0).trigger("mouseleave")
    //合作伙伴
    jQuery("#hzhb").slide({ titCell: ".hd ul", mainCell: ".bd ul", autoPage: true, effect: "leftLoop", autoPlay: true, vis: 6 });
    //风采
    jQuery(".tmcont").slide({ titCell: ".hd ul", mainCell: ".bd ul", autoPage: true, effect: "leftLoop", autoPlay: true, vis: 4 });
    //客户见证
    jQuery("#kehuMain").slide({ mainCell: ".slide", effect: "leftLoop", autoPlay: false, interTime: 5000, delayTime: 200 });
    //产品
    $('.pro_r .prt ul li').mouseover(function () {
        $(this).addClass("cur").siblings().removeClass("cur");
        $(".pro_r .Rightshow").eq($('.pro_r .prt ul li').index(this)).show().siblings(".pro_r .Rightshow").hide();
    });
    //新闻
    $('.new_l .nlist li').mouseover(function () {
        $(this).addClass("cur").siblings().removeClass("cur");
        $(".new_l .news").eq($('.new_l .nlist li').index(this)).show().siblings(".news").hide();
    });
    //常见问答
    jQuery(".quetion").slide({ mainCell: ".bd", autoPlay: true, effect: "topMarquee", vis: 2, interTime: 100, trigger: "click" });
    $('.rtTop .topfei img').hover(function () {
        $(this).stop().animate({ "top": "-43px" }, 200)
    }, function () {
        $(this).stop().animate({ "top": "0" }, 200)
    })
	//回到顶部函数
    $(window).scroll(function () {
        var st = $(document).scrollTop();
        if (st > 500) {
            $('.rtTop').show();
        } else {
            $('.rtTop').hide();
        }
    })
    $('.rtTop .topfei').click(function () {
        $('html,body').animate({ 'scrollTop': 0 }, 500);
    });
})


//搜索
function xuanze() {
    var xz =document.getElementById('seachkeywords').value;
    if (xz.length == 0) {
        xz = "";
    }
    window.location.href = '/?s=' +xz;
}

//加入收藏
function addBookmark() {
    var title = document.title;
    var url = document.URL;
    try {
        window.external.addFavorite(url, title);
    }
    catch (e) {
        try {
            window.sidebar.addPanel(title, url, "");
        }
        catch (e) {
            alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}


//顶部导航二级菜单
jQuery(document).ready(function($){
/*arguments*/	
var topNav = $( '.navMain ul.nav>li' );
var subNav = $( '.navMain .sub-menu>li' );
/*have sub menu background*/
$( '.navMain .sub-menu li:has(.sub-menu)>a' ).addClass('sub');
/*top nav*/
$( topNav ).mouseenter( function(){
	$( this ).find( '>ul.sub-menu' ).fadeIn( 500 );
} );
$( topNav ).mouseleave( function(){
	$( this ).find( '>ul.sub-menu' ).fadeOut( 500 );
} );
});

//到某个高度后，给某个div加class
$(function(){
var nav=$(".navMain"); //得到导航对象
var win=$(window); //得到窗口对象
var sc=$(document);//得到document文档对象。
win.scroll(function(){
  if(sc.scrollTop()>=170){
    nav.addClass("fixednav"); 
   $(".navTmp").fadeIn(); 
  }else{
   nav.removeClass("fixednav");
   $(".navTmp").fadeOut();
  }
})  
})

//产品分类的banner
jQuery(".slideBox").slide({mainCell:".bd ul",effect:"leftLoop",interTime: 5000,autoPlay:true});


//新闻分类变色
$(function(){ var obj = $('.qiantian_do .do_box dl'); obj.each(function(i){ $(this).attr('id',"cpfff"+i); }) })

//cpScroll
$(window).scroll(function () {
var st = $(document).scrollTop();
if (st > 300) {
$('.pageScroll').show();
} else {
$('.pageScroll').hide();
}
})