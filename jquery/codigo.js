var x;
x = $(document);
x.ready(inicializar);

function inicializar() {
    var x;
    x = $("#hola");
    x.click(clickHecho);
}

function clickHecho() {
    var x;
    x = $("#hola");
    x.css("color", "green");
}