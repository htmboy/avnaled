

























if(typeof doyoo=='undefined' || !doyoo){
var d_genId=function(){
var id ='',ids='0123456789abcdef';
for(var i=0;i<32;i++){ id+=ids.charAt(Math.floor(Math.random()*16)); } return id;
};

var schema='http';
if(location.href.indexOf('https:') == 0){
schema = 'https';
}
var doyoo={
env:{
secure:schema=='https',
mon:schema+'://vqf5z.talk99.cn/monitor',
chat:'https'+'://chat2440.talk99.cn/chat',
file:schema+'://aux.soperson.com/131221',
compId:10040101,
confId:10100818,
workDomain:'www.dhq898.com,www.m.dhq898.com',
vId:d_genId(),
lang:'',
fixFlash:0,
fixMobileScale:0,
subComp:15465,
_mark:'54ba23e51b7f8585dabf4554df9abe8e4bf512afad8d92f31e18740ccf2d9d139a1ed894072bc7bb'
},
chat:{
mobileColor:'',
mobileHeight:80,
mobileChatHintBottom:0,
mobileChatHintMode:0,
mobileChatHintColor:'',
mobileChatHintSize:0,
priorMiniChat:0
}

, monParam:{
index:1,
preferConfig:1,

title:'\u514d\u8d39\u54a8\u8be2\uff1a0755-2776 1631',
text:'',
auto:-1,
group:'10066948',
start:'00:00',
end:'24:00',
mask:false,
status:false,
fx:0,
mini:1,
pos:2,
offShow:0,
loop:0,
autoHide:5,
hidePanel:0,
miniStyle:'#168ed9',
miniWidth:'300',
miniHeight:'450',
showPhone:0,
monHideStatus:[1,1,1],
monShowOnly:'',
autoDirectChat:18,
allowMobileDirect:0,
minBallon:0,
chatFollow:1,
backCloseChat:0,
ratio:0
}


, panelParam:{
mobileIcon:'',
mobileIconWidth:0,
mobileIconHeight:0,
category:'icon',
preferConfig:1,
position:1,
vertical:237,
horizon:5


,mode:1,
target:'10066948',
online:'http://a.looyu.com/10040101/16c150d6d71f4fc2912b60a078e01d19.png',
offline:'http://a.looyu.com/10040101/16c150d6d71f4fc2912b60a078e01d19.png',
width:120,
height:257,
status:0,
closable:0,
regions:[],
collapse:1

,collapsed:0
,collapseIcon:'http://cf865.com/71kefu/sz-dh/ss-1.png'
,expandIcon:'http://cf865.com/71kefu/sz-dh/ss-1.png'
,collapseW:28
,collapseH:109
,collapseT:68



}


,msgParam:{
title:'\u6b22\u8fce\u60a8\u7684\u7559\u8a00\uff01',
index:0,
pos:1,
group:10066948,
delay:0,
hidePhone:0
}


,sniffer:{
ids:'buynowsmalls.gif',
gids:'10066948'
}

};

if(typeof talk99Init == 'function'){
talk99Init(doyoo);
}
if(!document.getElementById('doyoo_panel')){
var supportJquery=typeof jQuery!='undefined';
var doyooWrite=function(tag,opt){
var el=document.createElement(tag);
for(v in  opt){
if(opt.hasOwnProperty(v)){
el.setAttribute(v,opt[v]);
}
}
                var tar = document.body||document.getElementsByTagName('head')[0];
                tar.appendChild(el);
}
doyooWrite('link',{rel:'stylesheet',type:'text/css',href:'//aux.soperson.com/131221/oms.css?190803'});
doyooWrite('script',{type:'text/javascript',src:'//aux.soperson.com/131221/looyu.js?200304',charset:'utf-8'});
}
}
