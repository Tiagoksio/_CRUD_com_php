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

function registred_message() { 
    let msg = document.querySelector('h2');
    msg.innerText = "Sua Mensagem Foi Registrada!";
    msg.style.color = 'rgba(42, 150, 33)';
};

