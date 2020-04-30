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

function gallery() {
    var gallery = document.getElementsByName('gallery');
    var currentId = '';
    var currentSort = '';
    var aimId = '';
    var aimSort = '';
    for (var i = 0; i < gallery.length; i++){
        gallery[i].addEventListener('dragend', function () {
            currentId = this.getAttribute('id');
            currentSort = this.getAttribute('sort');
            console.log(currentId + ',' + currentSort + '==>' + aimId +',' + aimSort);
        });
        gallery[i].addEventListener('dragenter', function () {
            aimId = this.getAttribute('id');
            aimSort = this.getAttribute('sort');
        });
    }
    console.log(gallery);
}
gallery();