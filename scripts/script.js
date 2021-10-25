$(function(){
    const botao_menu = $('.sidebar_btn');
    const menu_lateral = $('#menu');
    
    botao_menu.click(() => {
        let visibility = menu_lateral.css( "visibility") == 'visible'? 'hidden': 'visible';
        menu_lateral.css( "visibility", visibility);
    });

    $(window).resize(function () {
        if(visualViewport.width > 1066) {
            menu_lateral.css( "visibility", 'visible');
        } else {
            menu_lateral.css( "visibility", 'hidden');
        };
    });
});


function empty_field(index) { 
    document.querySelectorAll('label')[index].style.color = "red";
    document.querySelector(".msg-erro").style.visibility = 'visible';
};

function registred_message(bool) { 
    let error_msg = document.querySelector('h2');
    if (bool) {
        error_msg.innerText = "Sua Mensagem Foi Registrada!";
        error_msg.style.color = 'rgb(42, 150, 33)';
    } else {
        error_msg.innerText = "Não Foi Possível Registrar Sua Mensagem!";
        error_msg.color = 'rgb(222, 0, 0)';
    }
    
};

