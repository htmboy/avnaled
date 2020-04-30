function xhrHttp(of, id, method, value = null) {
    var xhr = new XMLHttpRequest();
    xhr.open("post", "/api/backstage/" + method);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200)
        {
            console.log(this.responseText);
            location.reload();
        }
    }
    xhr.send(JSON.stringify({"of":of, "id": id, "value": value}));
}

function isShow() {
    var is_show = document.getElementsByClassName('is_show');

    for (var i = 0; i < is_show.length; i++){
        // console.log(is_show[i]);
        is_show[i].addEventListener('click', function (e) {
            if(e.target.tagName == "SPAN"){
                var id = this.parentElement.getAttribute('id');
                var of = this.parentElement.getAttribute('of');
                // console.log(of, id);
                xhrHttp(of, id, 'isshow');
            }
        }, true);
    }
}
isShow();
function sort() {
    var sort = document.getElementsByName('sort');

    for (var i = 0; i < sort.length; i++){
        var s = sort[i];
        sort[i].addEventListener('blur', function (e) {
            var _this = e.target.parentElement;
            var id = _this.parentElement.getAttribute('id');
            var of = _this.parentElement.getAttribute('of');
            var old = _this.getAttribute('old');
            var value = e.target.value;
            console.log(this, of, id, 'sort', old, value);
            if (old != value)
                xhrHttp(of, id, 'sort', value);
        }, true);
    }
}
sort();

