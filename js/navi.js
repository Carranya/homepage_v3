window.onload = function(){
    document.getElementById('idOpen').addEventListener('click', open);
    document.getElementById('idClose').addEventListener('click', close);
}

function open(){
    let menu = document.getElementById('idMenu');
    menu.setAttribute('class', 'text-3xl');

    let openNavi = document.getElementById('idOpen');
    openNavi.setAttribute('class', 'hidden');

    let closeNavi = document.getElementById('idClose');
    closeNavi.setAttribute('class', 'w-10');

    const pages = [
        'menuHome',
        'menuPortfolio',
        'menuIt',
        'menuAbout',
        'menuContact',
    ]
    for(let i=0; i<pages.length; i++){
        document.getElementById(pages[i]).addEventListener('click', close);
    }
}

function close(){
    
    let menu = document.getElementById('idMenu');
    menu.setAttribute('class', 'hidden');

    let openNavi = document.getElementById('idOpen');
    openNavi.setAttribute('class', 'w-10');

    let closeNavi = document.getElementById('idClose');
    closeNavi.setAttribute('class', 'hidden');
}