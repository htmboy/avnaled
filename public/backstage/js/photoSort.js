
function f(){
    var del = document.getElementsByClassName('del');
    for (var i = del.length - 1; i >= 0; i--) {
        del[i].onclick = function(){
            if(confirm('是否确定删除?')){
                var table = 'spectacle';
                var id = this.parentNode.parentNode.parentNode.parentNode.getAttribute('spec_id');
                var id_field = 'spec_id';
                var num = this.parentNode.previousSibling.previousSibling.getAttribute('num');

                var field = num== 1 ? 'spec_photo' : 'spec_photo' + num;
                del_ajax(table, id, id_field, field, this);
            }

        }
    }
}

function del_ajax(table, id, id_field, field, _this){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            switch(xhr.responseText){
                case '1': location.reload();
                    break;
                case '2': alert('数据传输有误! 请稍后重试!');
                    break;
                case '0': alert('非法操作!');
                    break;
            }

        }
    }
    xhr.open('post', "/index.php/admin/index/del_field_xhr.html", true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.send('table='+table+'&id='+id+'&id_field='+id_field+'&field='+field);
}
var img = document.getElementsByClassName('am-img-bdrs');
for (var i = 0; i < img.length; i++) {
    img[i].ondragenter = function(){
        aim_num = this.getAttribute('num');
        aim_src = this.getAttribute('src').substr(8);

    }
    img[i].ondragend = function(){
        var id = this.parentNode.parentNode.parentNode.getAttribute('spec_id');
        origin_num = this.getAttribute('num');
        origin_src = this.getAttribute('src').substr(8);
        console.log(aim_num);
        console.log(aim_src);
        console.log(origin_num);
        console.log(origin_src);
        ajax(id, aim_num, aim_src, origin_num, origin_src);
    }
}
function ajax(id, aim_num, aim_src, origin_num, origin_src){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            console.log(this.responseText);
            switch(xhr.responseText){
                case '1': location.reload();
                    break;
                case '2': alert('数据传输有误! 请稍后重试!');
                    break;
                case '0': alert('非法操作!');
                    break;
            }
        }
    }
    xhr.open('post', "/index.php/admin/news/spectacle_change.html", true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.send('id='+id+'&aim_num='+aim_num+'&aim_src='+aim_src+'&origin_num='+origin_num+'&origin_src='+origin_src);
}

function gallery() {
    var gallery = document.getElementsByName('gallery');
    for (var i = 0; i < gallery.length; i++){
        gallery[i].addEventListener('dragend', function () {
            console.log(this);
        });
        gallery[i].addEventListener('dragenter', function () {
            console.log(this);
        });
    }
    console.log(gallery);
}
gallery();