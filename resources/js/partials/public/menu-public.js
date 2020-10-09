
//  Personalización del navbar
// ------------------------------- 

// Mostrar el menú al desplazar hacia arriba ---------------------------

// window.pageYOffset => Debuelve la cantidad en pixeles que se ha
// desplazado la pagina de las esquina superior izquierda hacia abajo.
let ubicacionPrinciapal = window.pageYOffset;

window.onscroll = function() {
    let Desplazamiento_Actual = window.pageYOffset;

    // Si se hace scroll hacia arriba
    if(ubicacionPrinciapal >= Desplazamiento_Actual){
        $('#menu').removeClass('f-slideDown');
        $('#menu').addClass('f-slideUp');

        // Si se hace scroll hacia arriba se encoge el menú en caso que haya estado desplegado
        $('#menu__btn-toggle').addClass('collapsed');
        $('#menu__btn-toggle').attr('aria-expanded', false);
        $('#navbarCollapse').removeClass('show');
        $('#navbarCollapse').addClass('collapse');
        $("#menu").removeClass('f-navbar--medium-enable');
        $("#menu").addClass('f-navbar--medium-disable');
    }
    else{// Si se hace scroll hacia abajo
        $('#menu').removeClass('f-slideUp');
        $('#menu').addClass('f-slideDown');
    }

    // La ubicación en este instante es igual al desplazamiento actual
    ubicacionPrinciapal = Desplazamiento_Actual;

    // Si la barra de scroll esta al inicio quitar las cases
    if(window.pageYOffset == 0){
        $('#menu').removeClass('f-slideDown');
        $('#menu').removeClass('f-slideUp');
    }
}

// Personalización del navbar para tamaños menores a "lg" 992px -----------------------
// El menú en su estado natural es transparente, pero si hacemos 'click' en el boton menú
// debe desplegarse tomando el color que se haya designado
document.getElementById("menu__btn-toggle").addEventListener("click", function(){
    
    var btnToggleAriaExpanded = this.getAttribute("aria-expanded");
    if(btnToggleAriaExpanded == "false"){
        $("#menu").removeClass('f-navbar--medium-disable');
        $("#menu").addClass('f-navbar--medium-enable');
    }else if(btnToggleAriaExpanded == "true"){
        $("#menu").removeClass('f-navbar--medium-enable');
        $("#menu").addClass('f-navbar--medium-disable');
    }
});
	