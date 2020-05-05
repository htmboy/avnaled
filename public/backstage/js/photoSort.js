function xhrHttp(of, method, data) {
    var xhr = new XMLHttpRequest();
    xhr.open("post", "/api/backstage/" + method);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200)
        {
            console.log(this.responseText);
            // location.reload();
        }
    }
    xhr.send(JSON.stringify({"of":of, "data": data}));
}

function gallery() {
    var gallery = document.getElementsByName('gallery');
    var firId = '';
    var firSort = '';
    var secId = '';
    var secSort = '';
    for (var i = 0; i < gallery.length; i++){
        gallery[i].addEventListener('dragend', function () {
            firId = this.getAttribute('id');
            firSort = this.getAttribute('sort');
            console.log(firId + ',' + firSort + '==>' + secId +',' + secSort);
            if(firId != secId)
                xhrHttp('gallery', 'sort', { 'firId': firId, 'firSort': firSort, 'secId': secId, 'secSort': secSort});
        });
        gallery[i].addEventListener('dragenter', function () {
            secId = this.getAttribute('id');
            secSort = this.getAttribute('sort');
        });
    }
    // console.log(currentId, currentSort, aimId, aimSort);
}
gallery();