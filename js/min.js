$(document).ready(function() {
    colaEfectos();
});


function colaEfectos() {
    capa = $("#trabajo2");
    capa.animate({
        "font-size": "1.5em"
    }, 2000);

    capa.animate({
        "top": "-30px"
    }, 270000, colaEfectos);


}