
document.getElementsByClassName('uploadImage')[0].onclick = () => {
    document.getElementsByName('photo')[0].click();


}
document.getElementsByName('photo')[0].onchange = () => {
    if(document.getElementsByName('photo')[0].files.length){
        document.forms['uploadImage'].submit();
    }
}