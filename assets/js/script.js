interacaoMenuHamburguer();
mascarCpf();


function interacaoMenuHamburguer() {
    const menuHamburguer = document.querySelector(".cabecalho__menu-hamburguer");
    const menu = document.querySelector(".lista-menu");
    menuHamburguer.addEventListener("click", () => {
        menu.classList.toggle("ativado");
        if (menu.className.endsWith("ativado")) {
            menuHamburguer.setAttribute('src', './assets/img/fechar.svg');
        } else {
            menuHamburguer.setAttribute('src', './assets/img/hamburguer.svg');
        }
    });
}

function mascarCpf() {
    const cpf = document.querySelector("#cpf");

    cpf.addEventListener("blur", function () {
        if (cpf.value) cpf.value = cpf.value.match(/.{1,3}/g).join(".").replace(/\.(?=[^.]*$)/, "-");
    });
}


//Mascara telefone

    function mascara(o, f) {
      v_obj = o;
      v_fun = f;
      setTimeout("execmascara()", 1);
    }
    function execmascara() {
      v_obj.value = v_fun(v_obj.value);
    }
    function mtel(v) {
      v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
      v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
      v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
      return v;
    }
    function id(el) {
      return document.getElementById(el);
    }
    window.onload = function () {
      id("telefone").onkeyup = function () {
        mascara(this, mtel);
      };
    };
