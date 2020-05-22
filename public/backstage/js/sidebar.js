var sidebar = document.getElementsByClassName('nav-item');
for (var i = 0; i < sidebar.length; i++)
{
    if(sidebar[i].getElementsByTagName('a')[0].href
        == location.href.split('?')[0]){
        sidebar[i].getElementsByTagName('a')[0]
            .setAttribute('class', 'nav-link active');
        if(sidebar[i].parentElement.parentElement.getAttribute('class') == 'nav-item has-treeview'){
            if(sidebar[i].parentElement.previousElementSibling.getAttribute('class') == 'nav-link'){
                sidebar[i].parentElement.previousElementSibling.setAttribute('class', 'nav-link active');
            }
            sidebar[i].parentElement.parentElement.setAttribute('class', 'nav-item has-treeview menu-open');
        }
    }
}