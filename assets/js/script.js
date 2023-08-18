const menuHamburguer = document.querySelector(".cabecalho__menu-hamburguer");
const menu = document.querySelector(".lista-menu");
menuHamburguer.addEventListener("click", () =>{
    menu.classList.toggle("ativado");
    if(menu.className.endsWith("ativado")){
        menuHamburguer.setAttribute('src', './assets/img/fechar.svg')
    }else{
        menuHamburguer.setAttribute('src', './assets/img/hamburguer.svg')
    }
})