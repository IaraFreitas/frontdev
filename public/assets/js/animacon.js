// WOW JS

new WOW().init();

// diparo para o whatsapp


function EnviarWhats() {


    var site = "*Site FrontDev - Orçamento*";
    var form = document.forms['orcamento'];

    var nome = form.elements['nome'].value;
    var fone = form.elements['fone'].value;
    var email = form.elements['email'].value;
    var mens = form.elements['mens'].value;




    if (nome === '') {
        alert('Preencha Seu Nome.')
        return false;
    }

    if (mens.length < 10) {
        alert('Mensagem sem o minimo de caracteres ')
        return false;
    }


    // Expressão regular para validar telefone no formato (XX) XXXXX-XXXX ou (XX) XXXX-XXXX
    const exfone = /^\(\d{2}\) \d{4,5}-\d{4}$/;
    if (!exfone.test(fone)) {
        alert('Por favor Insira um Telefone Válido, no formato (XX) XXXXX-XXXX ou (XX) XXXX-XXXX')
        return false;
    }


    // Expressão regular para validar formato de e-mail
    const exemail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!exemail.test(email)) {
        alert('Por favor Insira um Email Válido, no formato xxx@gmail.com')
        return false;
    }



    var numWhats = '5511988623322';
    var quebraDeLinha = '%0A';

    nome = window.encodeURIComponent(nome);
    fone = window.encodeURIComponent(fone);
    email = window.encodeURIComponent(email);
    mens = window.encodeURIComponent(mens);

    window.open("https://wa.me/" + numWhats + "?text=" + site
        + quebraDeLinha + quebraDeLinha
        + nome + quebraDeLinha
        + fone + quebraDeLinha
        + email + quebraDeLinha
        + mens)


    window.open(url, '_blank')

    form.elements['nome'].value = "";
    form.elements['fone'].value = "";
    form.elements['email'].value = "";
    form.elements['mens'].value = "";
}


//menu mobile 

document.querySelector(".abrir-menu").onclick = function () {
    // console.log(".BUH")
    document.documentElement.classList.add("menu-ativo");
}

document.querySelector(".fechar-menu").onclick = function () {
    document.documentElement.classList.remove("menu-ativo");
}

// Menu Fixo

window.onscroll = function(){
    // console.log('Teste Scroll')

    var top = document.documentElement.scrollTop;

    console.log(top);

    if (top > 900) {
        document.getElementById("topo-fixo").classList.add('menu-fixo');
    }else{
        document.getElementById("topo-fixo").classList.remove('menu-fixo');
    }
}