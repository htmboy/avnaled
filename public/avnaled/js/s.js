(function(){var c = {logId: '1921943498908548477', siteId: 'fd1fb95da64fe95a371f817b852c7154', domain:''  , mapCard: {id: 23953, name: '深圳市大荷科技有限公司', address:'广东省深圳市罗湖区梨园路东583-585号', tel: '0755-2776 1631', email: 'zkhotline@vip.sina.com', desc: '深圳市大荷科技有限公司旗下知名品牌"大荷"水性漆，现经营产品有水性木器漆、水性墙面漆、水性地板漆、水性地坪漆、水性户外木漆等，具有环保、安全、耐用，施工简单快捷的特点。', width: 500, height: 360, zoom: 15, lng: 114.118173, lat: 22.575549 }  ,appsOrder: ['mapCard','goTop','endApp']};
var app=app||{};
app.mapCard={create:function(e){var k=!1,p=!1,t="undefined"!=typeof app&&app.goTop?!0:!1,n=getAppsTopPosition("mapCard"),n=convertJSON2CSS({".hm-t-map-card, .hm-t-map-card-side-arrow, .hm-t-unfold-map-card":{_top:"expression(eval(document.documentElement.scrollTop+(document.documentElement.clientHeight||document.body.clientHeight)-this.offsetHeight-2-"+n+"))"}});insertCSS(n);var b=c.mapCard,f,q=function(a){if(a){a.hasChildNodes()&&a.removeChild(a.childNodes[0]);var d=createElement("iframe",{style:{width:"100%",
height:"100%"},scrolling:"no",frameBorder:0,allowTransparency:!0});d.src="about:blank";a.appendChild(d);a=(d.contentWindow?d.contentWindow:d.contentDocument.document?d.contentDocument.document:d.contentDocument).document;d=["<!doctype html>","<html>","<head>",'<meta http-equiv="Content-Type" content="text/html; charset=utf-8">',"<style>html,body{margin:0;overflow:hidden;}</style>",'<script src="http://api.map.baidu.com/api?v=1.5&ak=51zTquszuWKwBVnEhuGFKsg1" type="text/javascript">\x3c/script>',"</head>",
"<body>",'<div id="hm-t-iframe-map-container"></div>','<script type="text/javascript">',"var _hm_encodeHTML = function(source) {",'return String(source).replace(/&/g,"&amp;").replace(/</g,"&lt;")','.replace(/>/g,"&gt;").replace(/"/g, "&quot;").replace(/\'/g, "&#39;");',"};",["function initMap() {try {","var cardSettings = "+baidu.json.stringify(b)+";","document.getElementById('hm-t-iframe-map-container').style.width = cardSettings.width + 'px';document.getElementById('hm-t-iframe-map-container').style.height = cardSettings.height + 'px';var map = new BMap.Map('hm-t-iframe-map-container');map.addControl(new BMap.NavigationControl());if (cardSettings['lng'] && cardSettings['lat']) {var point = new BMap.Point(cardSettings['lng'], cardSettings['lat']);map.centerAndZoom(point, cardSettings['zoom']);var marker = new BMap.Marker(point);map.addOverlay(marker);if (cardSettings['name']) {var label = new BMap.Label(_hm_encodeHTML(cardSettings['name']), {offset: new BMap.Size(20,-10)});marker.setLabel(label);}}} catch (ex) {}}"].join(""),
"window.onload = initMap;","\x3c/script>","</body>","</html>"];a.open();a.write(d.join(""));a.close()}};(function(){f=createElement("div",{className:"hm-t-map-card",style:{width:b.width+"px",display:"none"}});e.appendChild(f);f.appendChild(createElement("div",{className:"hm-t-map-card-title",innerHTML:"\u5730\u56fe\u540d\u7247"}));(function(){var a=[],d=baidu.string.trim;void 0!==b.name&&""!==d(b.name)&&a.push(["\u540d\u79f0\uff1a",b.name]);void 0!==b.address&&""!==d(b.address)&&a.push(["\u5730\u5740\uff1a",
b.address]);void 0!==b.tel&&""!==d(b.tel)&&a.push(["\u7535\u8bdd\uff1a",b.tel]);void 0!==b.email&&""!==d(b.email)&&a.push(["email\uff1a",b.email]);void 0!==b.desc&&""!==d(b.desc)&&a.push(["\u7b80\u4ecb\uff1a",b.desc]);if(a.length){var d=createElement("div",{className:"hm-t-map-card-info"}),g=baidu.lang.isType;if(!a||!g(a,"Array")||!a.length)throw"table data must be provided with an unempty Array on createTable";for(var e=["<table>"],h=0;h<a.length;h++){var l=a[h];g(l,"String")&&(l=[l]);if(!g(l,"Array"))throw"row data type error, row data should be either an Array or a String";
e.push("<tr>");for(var m=0,k=l.length;m<k;m++)k===m+1?e.push('<td class="hm-t-map-card-info-table-content">'):0===m?e.push('<td class="hm-t-map-card-info-table-index">'):e.push("<td>"),e.push(baidu.string.encodeHTML(l[m])),e.push("</td>");e.push("</tr>")}e.push("</table>");a=e.join("");d.innerHTML=a;f.appendChild(d)}})();(function(){var a=createElement("div",{id:"hm_t_map_"+b.id,className:"hm-t-map-card-map",style:{width:b.width+"px",height:b.height+"px"}});f.appendChild(a);q(a)})();(function(){var a=
createElement("div",{className:"hm-t-map-card-map-link",style:{width:b.width+"px"}});a.appendChild(createElement("img",{src:"http://api.map.baidu.com/mapCard/img/bigMapIcon.jpg"}));var d=createElement("a",{target:"_blank",innerHTML:"\u67e5\u770b\u5927\u56fe",className:"hm-t-map-card-bug-map-link"});baidu.event.on(d,"click",function(){logAppActivity(89,[3,b.id,c.logId]);window.open("http://map.baidu.com/?latlng="+b.lat+","+b.lng+"&title="+b.name+"&content="+b.address,"newwindow","height=768,width=1024,top=0,left=0,toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,status=no")});
a.appendChild(d);f.appendChild(a)})()})();k||(k=!0,logAppActivity(89,[1,b.id,c.logId]));k=getAppsBottomPosition("mapCard",t?2:44);f.style.bottom="2px";var g=getElementsByClassName("hm-t-map-card-side-arrow",e);!g||!g.length?(g=createElement("div",{className:"hm-t-side-arrow hm-t-map-card-side-arrow",style:{display:"none"}}),e.appendChild(g)):g=g[0];var h=createElement("div",{style:{bottom:k},className:"hm-t-unfold-button hm-t-unfold-button-txt hm-t-unfold-map-card",title:"\u5730\u56fe\u540d\u7247",
innerHTML:"\u5730\u56fe\u540d\u7247"});e.appendChild(h);bindImgErrorLog(f);var r,s;baidu.event.on(h,"mouseover",function(){clearTimeout(s);eventEmitter.emit("mapcard-unfold")});baidu.event.on(h,"mouseout",function(){r=setTimeout(function(){eventEmitter.emit("mapcard-fold")},100)});baidu.event.on(f,"mouseover",function(a){a=a||window.event;a=baidu.event.getTarget(a);(a==f||baidu.dom.contains(f,a))&&clearTimeout(r)});baidu.event.on(f,"mouseout",function(a){a=a||window.event;a=a.relatedTarget||a.toElement;
if(a==f||!baidu.dom.contains(f,a))s=setTimeout(function(){eventEmitter.emit("mapcard-fold")},100)});eventEmitter.on("mapcard-unfold",function(){p||(p=!0,logAppActivity(89,[2,b.id,c.logId]));var a=getElementsByClassName("hm-t-map-card-map",e)[0];q(a);f.style.display="block";g.style.bottom=h.style.bottom;g.style.display="block"});eventEmitter.on("mapcard-fold",function(){f.style.display="none";g.style.display="none"});eventEmitter.on("goTopHide",function(){var a=getAppsBottomPosition("mapCard",2);g.style.bottom=
h.style.bottom=a});eventEmitter.on("goTopShow",function(){var a=getAppsBottomPosition("mapCard",44);g.style.bottom=h.style.bottom=a})},dispose:function(e){e=getElementsByClassName("hm-t-map-card",e)[0];e.parentNode.removeChild(e)}};
app.mapCard.css='.hm-t-map-card {position: fixed;right: 52px;bottom: 44px;border: 1px solid #c7c7c7;z-index: 99998;white-space: normal;font-size: 14px;line-height: 17px;overflow: hidden;color: #fff;background: #404040;_position: absolute;}.hm-t-map-card-title {border-bottom: 2px solid #f0f0f0;height: 23px;padding-top: 6px;color: #000;font-weight: bold;text-align: center;background-color: #f1f1f1;background: linear-gradient(top,#f1f1f1 0%,#e6e6e6 100%);background: -webkit-linear-gradient(top,#f1f1f1 0%,#e6e6e6 100%);background: -moz-linear-gradient(top,#f1f1f1 0%,#e6e6e6 100%);background: -ms-linear-gradient(top,#f1f1f1 0%,#e6e6e6 100%);}.hm-t-map-card-info {font-size: 12px;background-color: #fff;color: #333;}.hm-t-map-card-info table {font-size: 12px;}.hm-t-map-card-info table td {width: 65px;}.hm-t-map-card-info .hm-t-map-card-info-table-content {white-space: normal;word-break: break-all;word-wrap: break-word;width: auto;}.hm-t-map-card-info .hm-t-map-card-info-table-index {width: 43px;padding-left: 5px;}.hm-t-map-card-map-link {height: 30px;font-size: 12px;color: #0082cb;background-color: #f9f9f9;background: linear-gradient(top,#f9f9f9 0%,#ececec 100%);background: -webkit-linear-gradient(top,#f9f9f9 0%,#ececec 100%);background: -moz-linear-gradient(top,#f9f9f9 0%,#ececec 100%);background: -ms-linear-gradient(top,#f9f9f9 0%,#ececec 100%);text-align: center;}:root .hm-t-map-card-map-link {background-color: #f9f9f9;}.hm-t-map-card-map-link img {margin: 5px 5px 0 0;vertical-align: bottom;*vertical-align: text-bottom;}.hm-t-map-card-bug-map-link {cursor: pointer;}.hm-t-unfold-map-card {position: fixed;right: 2px;z-index: 99998;display: block;width: 40px;text-align: center;white-space: normal;text-decoration: none;_position: absolute;color: #fff;background: #666;cursor: pointer;height: \'37px\';font-size: 14px;line-height: 17px;padding-top: 3px;height: 37px!important;}.hm-t-container .hm-t-map-card-side-arrow {right: 45px;}';
var app=app||{};
app.goTop={create:function(b){var e=!1,a=document.createElement("div");a.className="hm-t-go-top";b.appendChild(a);a.style.display="none";var f=function(){var a=Math.max(document.documentElement.scrollLeft||0,Math.max(document.body.scrollLeft||0,window.scrollX||0)),b=Math.max(document.documentElement.scrollTop||0,Math.max(document.body.scrollTop||0,window.scrollY||0));window.scrollTo(Math.floor(a-Math.max(0.1*a,20)),Math.floor(b-Math.max(0.1*b,20)));(0<a||0<b)&&window.setTimeout(f,16)},d=function(){var b=
Math.max(document.documentElement.scrollTop||0,Math.max(document.body.scrollTop||0,window.scrollY||0));a.style.display=0<b?"block":"none";eventEmitter.emit(0<b?"goTopShow":"goTopHide");0<b&&!e&&(e=!0,log(4,c.subjectId,c.logId,1))};d();baidu.event.on(window,"scroll",d);baidu.event.on(window,"resize",d);baidu.event.on(a,"click",function(){log(5,c.subjectId,c.logId);f()});baidu.event.on(a,"mouseover",function(){a.style.backgroundPosition="-100px 0";a.style.backgroundColor="#404040";a.innerHTML="\u8fd4\u56de\u9876\u90e8"});
baidu.event.on(a,"mouseout",function(){a.style.backgroundPosition="-42px center";a.style.backgroundColor="#666";a.innerHTML=""});if("_bdhm_t"in window&&(d=window._bdhm_t.t))d.app=d.app||{},d.app.goTop={dispose:function(){app.goTop.dispose(b)}}},dispose:function(b){b=getElementsByClassName("hm-t-go-top",b)[0];b.parentNode.removeChild(b)}};
app.goTop.css='.hm-t-go-top {position:fixed;right:2px;bottom:2px;z-index:99998;cursor:pointer;width:40px;height:37px!important;text-align:center;white-space:normal;font-size:14px;line-height:17px;padding-top:3px;color:#fff;background:#404040;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEkAAAAXCAYAAABH92JbAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2hpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowMjgwMTE3NDA3MjA2ODExODA4M0UyNDA4ODdDRTZBQiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpBQjc5RkRFNkI5ODMxMUUzQkZGNDhENEJFQjM2OTcyRiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpBQjc5RkRFNUI5ODMxMUUzQkZGNDhENEJFQjM2OTcyRiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDI4MDExNzQwNzIwNjgxMTgwODNFMjQwODg3Q0U2QUIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDI4MDExNzQwNzIwNjgxMTgwODNFMjQwODg3Q0U2QUIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5HPYM5AAACC0lEQVR42uyZTSgEYRjH90NoqaVcpDblvKW2XOSkNh8H5Yac9sBBDqQokiJKSMpNTi5OPo6Ktsgu67JcUHIXWfK1u3b8Xx6Zxuzu+64dM83uv34zNfu8b8/8Z+d5P8YqSZLFJNLsRmyWvIRMKgVD4AhEwA3YAV0pzGwEqyAEwmAddIICHe7FqhnsdQM14FxKLj+ooFiGE2ykiD8GVbJ4I1ELAnTmasMODnAhpVcIFIMicMgRH6Z4IxnUAh4pP3Zu5TVpUOLXDJgWiB8wkEF9IK7IL07X05oUFLjpZ4JXQQOYYwfzafJcoDjVPqw43KE4lWtUTF+AQ8eBqQSsgTaO2E0apJ7URrdCDZOM62hQJfBzGmShOD+1+2XSiYaJ7utkkBsEgEewnYfauZUmzWmU6DuY0sEgLzgArgzbu6i992cu/1WclqXsa1iHIt0DYlnKP0b9fRZu5pWdZs7dWXqa7B80+s//oF5aMSjflGqBPq5BQnFtVv4UmGHjIPEH96PAZ6C5kVMwf6daPzbFKnqCqvx9Bk/yFjSBFTMvcL+1DerAmUA/p9Rm1+y7AHJdgnqwx9EHm1s0gKtc2CpR6gE00/ZHMm3RKxbJlf0kNb2BDrCk8hsbDdvBay5tuiUTGxL7waTs2iLw0YTR9BLZQRwDUVqwjuTS9q3VRB8C1OQUnM6UqdXX/IcADn0IMADs2AqDOPSutQAAAABJRU5ErkJggg==) no-repeat -42px center #666;*background-image:url(http://ecma.bdimg.com/holmes/t-popup-icons-png8.png);_position:absolute;_top:expression(eval(document.documentElement.scrollTop+(document.documentElement.clientHeight||document.body.clientHeight)-this.offsetHeight-2));}';
var baidu={cookie:{}};baidu.cookie.set=function(a,b,d){var e;d.expires&&(e=new Date,e.setTime(e.getTime()+d.expires));document.cookie=a+"="+b+(d.domain?"; domain="+d.domain:"")+(d.path?"; path="+d.path:"")+(e?"; expires="+e.toGMTString():"")+(d.secure?"; secure":"")};baidu.cookie.get=function(a){return(a=RegExp("(^| )"+a+"=([^;]*)(;|$)").exec(document.cookie))?a[2]:null};baidu.event={};
baidu.event.on=function(a,b,d){a.attachEvent?a.attachEvent("on"+b,function(b){d.call(a,b)}):a.addEventListener&&a.addEventListener(b,d,!1)};baidu.event.getTarget=function(a){a=a.target||a.srcElement;3===a.nodeType&&(a=a.parentNode);return a};baidu.lang={};baidu.lang.isType=function(a,b){return"[object "+b+"]"==={}.toString.call(a)};baidu.dom={};baidu.dom.g=function(a){baidu.lang.isType(a,"String")&&(a=document.getElementById(a));return a};
baidu.dom.contains=function(a,b){if(null==a||void 0==a||null==b||void 0==b)return!1;var d=baidu.dom.g;a=d(a);b=d(b);return a.contains?a!=b&&a.contains(b):!!(a.compareDocumentPosition(b)&16)};
(function(){(baidu.dom.ready=function(){function a(){if(!a.isReady){a.isReady=!0;for(var b=0,d=e.length;b<d;b++)e[b]()}}function b(){try{document.documentElement.doScroll("left")}catch(d){setTimeout(b,1);return}a()}var d=!1,e=[],f;document.addEventListener?f=function(){document.removeEventListener("DOMContentLoaded",f,!1);a()}:document.attachEvent&&(f=function(){"complete"===document.readyState&&(document.detachEvent("onreadystatechange",f),a())});(function(){if(!d)if(d=!0,"complete"===document.readyState)a.isReady=
!0;else if(document.addEventListener)document.addEventListener("DOMContentLoaded",f,!1),window.addEventListener("load",a,!1);else if(document.attachEvent){document.attachEvent("onreadystatechange",f);window.attachEvent("onload",a);var e=!1;try{e=null==window.frameElement}catch(h){}document.documentElement.doScroll&&e&&b()}})();return function(b){a.isReady?b():e.push(b)}}()).isReady=!1})();baidu.sio={};
baidu.sio.log=function(a,b){var d=new Image,e="mini_tangram_log_"+Math.floor(2147483648*Math.random()).toString(36);window[e]=d;d.onload=d.onerror=d.onabort=function(){d.onload=d.onerror=d.onabort=null;d=window[e]=null;b&&b(a)};d.src=a};baidu.string={};baidu.string.encodeHTML=function(a){return String(a).replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;").replace(/'/g,"&#39;")};
baidu.string.decodeHTML=function(a){return String(a).replace(/&quot;/g,'"').replace(/&lt;/g,"<").replace(/&gt;/g,">").replace(/&amp;/g,"&").replace(/&#([\d]+);/g,function(a,d){return String.fromCharCode(parseInt(d,10))})};baidu.string.trim=function(a){return String(a).replace(RegExp("(^[\\s\\t\\xa0\\u3000]+)|([\\u3000\\xa0\\s\\t]+$)","g"),"")};baidu.json={};baidu.json.parse=function(a){return(new Function('return (" + source + ")'))()};
baidu.json.stringify=function(){function a(a){/["\\\x00-\x1f]/.test(a)&&(a=a.replace(/["\\\x00-\x1f]/g,function(a){var b=d[a];if(b)return b;b=a.charCodeAt();return"\\u00"+Math.floor(b/16).toString(16)+(b%16).toString(16)}));return'"'+a+'"'}function b(a){return 10>a?"0"+a:a}var d={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"};return function(d){switch(typeof d){case "undefined":return"undefined";case "number":return isFinite(d)?String(d):"null";case "string":return a(d);
case "boolean":return String(d);default:if(null===d)return"null";if(d instanceof Array){var f=["["],g=d.length,h,k,l;for(k=0;k<g;k++)switch(l=d[k],typeof l){case "undefined":case "function":case "unknown":break;default:h&&f.push(","),f.push(baidu.json.stringify(l)),h=1}f.push("]");return f.join("")}if(d instanceof Date)return'"'+d.getFullYear()+"-"+b(d.getMonth()+1)+"-"+b(d.getDate())+"T"+b(d.getHours())+":"+b(d.getMinutes())+":"+b(d.getSeconds())+'"';h=["{"];k=baidu.json.stringify;for(g in d)if(Object.prototype.hasOwnProperty.call(d,
g))switch(l=d[g],typeof l){case "undefined":case "unknown":case "function":break;default:f&&h.push(","),f=1,h.push(k(g)+":"+k(l))}h.push("}");return h.join("")}}}();baidu.browser={};baidu.browser.firefox=/firefox\/(\d+\.\d+)/i.test(navigator.userAgent)?+RegExp.$1:void 0;var extend=function(a,b){for(var d in b)({}).hasOwnProperty.call(b,d)&&(a[d]=b[d]);return a},iterate=function(a,b){for(var d in a)if({}.hasOwnProperty.call(a,d)&&!1===b.call(a,d,a[d]))return!1},getElementsByClassName=function(a,b){b=b||document;if(b.getElementsByClassName)return b.getElementsByClassName(a);for(var d=[],e=b.getElementsByTagName("*"),f=RegExp("(^|\\s)"+a.replace(/\-/g,"\\-")+"(\\s|$)"),g=0,h=e.length;g<h;g++)f.test(e[g].className)&&d.push(e[g]);return d},convertJSON2CSS=function(a){var b=
"";iterate(a,function(a,e){b+=a+"{";iterate(e,function(a,d){b+=a+":"+d+";"});b+="}"});return b},eventEmitter=function(){var a={};return{on:function(b,d){a[b]=a[b]||[];a[b].push(d)},emit:function(b,d){a[b]=a[b]||[];for(var e=a[b].length,f=0;f<e;f++)a[b][f](d)}}}(),getDocumentHeight=function(){return Math.max(document.documentElement.scrollHeight,document.body.clientHeight)},getDocumentScrollTop=function(){return Math.max(document.documentElement.scrollTop,document.body.scrollTop)},getViewportHeight=
function(){return window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight},requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(a){window.setTimeout(a,1E3/60)}}(),ellipsis=function(a,b,d,e){e=e||100;!baidu.lang.isType(a,"Array")&&(!baidu.lang.isType(a,"NodeList")&&!baidu.lang.isType(a,"HTMLCollection"))&&(a=[a]);for(var f=0,g=a.length;f<g;f++){a[f].style.visibility="visible";if("ellipsis"==
a[f].getAttribute("data-overflow")){var h=0;a[f].offsetHeight>b&&(a[f].innerHTML+="\u2026");for(;a[f].offsetHeight>b&&h++<e;){var k=baidu.string.decodeHTML(a[f].innerHTML),k=k.substring(0,k.length-2)+"\u2026";a[f].innerHTML=baidu.string.encodeHTML(k)}}a[f].style.height=b+"px"}d&&d()},isBackCompat=function(){return"BackCompat"==document.compatMode},AceTemplate=function(){function a(a){var b=[];b.push("with(this){");b.push(a.replace(/<(script|style)[^>]*>[\s\S]*?<\/\1>/g,function(a){return['#{decodeURIComponent("',
encodeURIComponent(a),'")}'].join("")}).replace(/[\r\n]+/g,"\n").replace(/^\n+|\s+$/mg,"").replace(/((^\s*[#<].*$)\s?)+/mg,function(a){return(a=['"',a.replace(/&none;/g,"").replace(/["'\\]/g,"\\$&").replace(/\n/g,"\\n").replace(/(!?#)\{(.*?)\}/g,function(a,b,d){d=d.replace(/\\n/g,"\n").replace(/\\([\\'"])/g,"$1");return['",',/^[a-z$][\w+$]+$/i.test(d)&&!/^(true|false|NaN|null|this)$/.test(d)?["typeof ",d,'=="undefined"?"":'].join(""):"","String("+d+').replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/\'/g, "&#39;")',
',"'].join("")}),'"'].join("").replace(/^"",|,""$/g,""))?["_output_.push(",a,");"].join(""):""}));b.push("}");return new Function("_output_","helper",b.join(""))}function b(b){var e=a(b);return function(a,b){var d=[];e.call(a,d,b);return d.join("")}}return{format:function(a,e,f){return!a?"":b(a)(e,f)},rander:b}}(),loadScript=function(a,b){var d=document.createElement("script");d.charset="utf-8";baidu.lang.isType(b,"Function")&&(d.readyState?d.onreadystatechange=function(){if("loaded"===d.readyState||
"complete"===d.readyState)d.onreadystatechange=null,b()}:d.onload=function(){b()});d.src=a;var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(d,e)},createElement=function(a,b){var d=document.createElement(a);if(void 0!==b){var e=baidu.lang.isType;(function(a,b){iterate(b,function(b,d){if(e(d,"Object"))if("style"===b)for(var g in d)a.style[g]=d[g];else throw"creating element with incorrect attributes";else a[b]=d})})(d,b)}return d};var def={VERSION:"2.4.0",HM_RCV_PATH:"https://hm.baidu.com/hm.gif",CRS_LOG_PATH:"https://ers.baidu.com/crs.gif",MAX_INT:2147483647,IMG_SIZES:[{},{width:84,height:84},{width:96,height:96},{width:140,height:112}]},tClassRegex=/(^|,|})\s*\.hm-t-/g,containerClassRegex=RegExp("#hm_t_"+c.subjectId+" .hm-t-container","g"),getAppsBottomPosition=function(a,b){for(var d=b||2,e=c.appsOrder.length,f=0;f<e;f++)if(a===c.appsOrder[f]){d+=42*(e-f-2);break}return d+"px"},getAppsTopPosition=function(a,b){for(var d,e=
c.appsOrder.length,f=0;f<e;f++)if(a===c.appsOrder[f]){d=e-f-1;break}return 42*d},insertCSS=function(a){a=(a||"").replace(tClassRegex,"$1html #hm_t_"+c.subjectId+" .hm-t-");a=a.replace(containerClassRegex,"#hm_t_"+c.subjectId+".hm-t-container");var b=document.createElement("style");b.name="hm-t-"+c.subjectId+"-css";var d=document.getElementsByTagName("head");d&&d[0].appendChild(b);b.styleSheet?b.styleSheet.cssText=a:b.appendChild(document.createTextNode(a))},removeCSS=function(){for(var a=document.getElementsByTagName("style"),
b=a.length-1;0<=b;b--)a[b].name=="hm-t-"+c.subjectId+"-css"&&a[b].parentNode.removeChild(a[b])},log=function(a){for(var b=[],d=0,e=arguments.length;d<e;d++)b[d]=encodeURIComponent((""+arguments[d]).replace(/'/g,"'0").replace(/\*/g,"'1"));baidu.sio.log([def.HM_RCV_PATH+"?si="+c.siteId,"st=4&nv=0&et=92","ep="+b.join("*"),"rnd="+Math.round(Math.random()*def.MAX_INT)].join("&"))},logAppActivity=function(a,b){baidu.lang.isType(b,"Array")||(b=[b]);for(var d=[],e=0,f=b.length;e<f;e++)d[e]=encodeURIComponent((""+
b[e]).replace(/'/g,"'0").replace(/\*/g,"'1"));baidu.sio.log([def.HM_RCV_PATH+"?si="+c.siteId,"st=4&nv=0","et="+a,"ep="+d.join("*"),"rnd="+Math.round(Math.random()*def.MAX_INT)].join("&"))},execApps=function(a){"undefined"!=typeof app&&iterate(c.appsOrder,function(b,d){if(app[d]&&"special"!==d){var e=app[d];insertCSS(e.css);e.create(a)}})},bindImgErrorLog=function(a){a=a.getElementsByTagName("img");for(var b=0,d=a.length;b<d;b++)a[b].onerror=function(a){a=a||window.event;a=a.target||a.srcElement;a.onerror=
null;baidu.sio.log(def.CRS_LOG_PATH+"?type=deadthumb&src="+encodeURIComponent(a.src))}},bindItemClickLog=function(a){baidu.event.on(a,"click",function(b){for(b=b.target||b.srcElement;"a"!=b.tagName.toLowerCase()&&b!=a;)b=b.parentNode;if("a"==b.tagName.toLowerCase()){var d=-1<b.className.indexOf("hm-t-hot-word-link")?3:1;log(d,c.subjectId,c.logId,b.href,b.title)}})},init=function(){"_bdhm_t"in window&&window._bdhm_t.c&&(c=extend(c,window._bdhm_t.c),c.demo&&(window._bdhm_t={c:c,t:{create:style.create,
dispose:style.dispose,fold:style.fold,unfold:style.unfold}}));if(navigator&&-1<(navigator.userAgent||"").indexOf("MSIE 6"))try{document.execCommand("BackgroundImageCache",!1,!0)}catch(a){}c.appsOrder.length&&(c.appsOrder=c.appsOrder.slice(0,c.appsOrder.length-1));var b=document.createElement("div");b.id="hm_t_"+c.subjectId;b.className="hm-t-container";document.body.appendChild(b);"undefined"!=typeof style&&style.create(b);execApps(b)};baidu.dom.ready(init);})();
