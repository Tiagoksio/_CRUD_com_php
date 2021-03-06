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


/*
const botao_menu = document.querySelector('.sidebar_btn')
const menu = document.querySelector('#menu')

botao_menu.addEventListener('click', activate_menu)
window.addEventListener('resize', function () {
    (window.VisualViewport.width > 1066) ? menu.style.visibility = 'visible' : menu.style.visibility = 'hidden';
})

function activate_menu() {
    let estado_menu = menu.style.visibility == 'visible' ? 'hidden': 'visible';
 
    menu.style.visibility = estado_menu   
}
*/
function empty_field(index) { 
    document.querySelectorAll('label')[index].style.color = "red";
    document.querySelector(".msg-erro").style.visibility = 'visible';
}

function registred_message(bool) { 
    let error_msg = document.querySelector('h2');
    if (bool) {
        error_msg.innerText = "Sua Mensagem Foi Registrada!";
        error_msg.style.color = 'rgb(42, 150, 33)';
    } else {
        error_msg.innerText = "Não Foi Possível Registrar Sua Mensagem!";
        error_msg.color = 'rgb(222, 0, 0)';
    }
    
}

function activate_modal(bool) {
    if(bool) {
        var modal = document.querySelector('.modal-container')
        modal.classList.add('active')
    } else {
        var modal = document.querySelector('.modal-container')
        modal.classList.remove('active')
    }
    
}