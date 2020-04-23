function openChat()
{
    var wap_qq = document.getElementsByClassName("wap_qq");
    for (var i = wap_qq.length - 1; i >= 0; i--) {
        wap_qq[i].onclick = function () {
            wapQQ();
        }
    }

}
function wapQQ()
{
    var e = document.createElement("iframe");
    e.src = "http://wpa.qq.com/msgrd?v=3&uin=755930694&site=qq&menu=yes";
    e.height = 0;
    e.width = 0;
    e.frameborder = 0;
    document.body.appendChild(e);
}
openChat()