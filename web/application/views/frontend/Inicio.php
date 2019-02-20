<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<script>
    $(function () {

        $('#carousel-example-generic').on('slide.bs.carousel', function () {
            $('.tooltip-carousel').popover('hide');
            $(this).find('.caraousel-tooltip-item.active').fadeOut(function () {
                $(this).removeClass('active');
            });
        });

        $('#carousel-example-generic').on('slid.bs.carousel', function () {
            var index = $(this).find('.carousel-inner > .item.active').index();
            $(this).find('.caraousel-tooltip-item').eq(index).fadeIn(function () {
                $(this).addClass('active');
            });
        });

        $('.tooltip-carousel').mouseenter(function () {
            $(this).popover('show');
        }).mouseleave(function () {
            $(this).popover('hide');
        });
    });


    $("#inicio").addClass("activo");
    $("#contacto").removeClass("activo");
    $("#quienes").removeClass("activo");


</script>

<script>
    $(document).ready(function () {
        $(".fadeProd").hide().fadeIn(4000);
    });
</script>


<!-- CONTENEDOR  PRINCIPAL--> 
<div class="container">

    <div style="border-radius: 5px;" id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://lorempixel.com/880/200/fashion/" alt="..." style="width:100%">
                <div class="carousel-caption">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 18px;" >ARTÍCULOS POR CATEGORIA</div> <span style="background: #FFC60A; opacity: 0.8; font-family: 'Roboto', sans-serif; font-size: 14px;"> ¿Necesitas una búsqueda mas precisa? Selecciona la categoría y revisa los productos.</span>
                </div>
            </div>
            <div class="item">
                <img src="http://lorempixel.com/880/200/fashion/4" alt="..." style="width:100%">
                <div class="carousel-caption">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 18px;" >ARTÍCULOS POR CATEGORIA</div> <span style="background: #FFC60A; opacity: 0.8; font-family: 'Roboto', sans-serif; font-size: 14px;"> ¿Necesitas una búsqueda mas precisa? Selecciona la categoría y revisa los productos.</span>
                </div>
            </div>
            <div class="item">
                <img src="http://lorempixel.com/880/200/fashion/3" alt="..." style="width:100%">
                <div class="carousel-caption">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 18px;" >ARTÍCULOS POR CATEGORIA</div> <span style="background: #FFC60A; opacity: 0.8; font-family: 'Roboto', sans-serif; font-size: 14px;"> ¿Necesitas una búsqueda mas precisa? Selecciona la categoría y revisa los productos.</span>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    <br>

    <!-- PARTE PARA MOSTRAR LOS PRODUCTOS-->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="panel panel-defaul">
                <div class="panel-heading" >
                    <div style=" color:#000000; border-bottom: 1px solid #DDDDDD;" id="headProd"><span style=" border-bottom:3px #FF5857 solid;">PRODUCTOS AGREGADOS</span></div>
                </div>
                <div class="panel-body">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3  col-xs-12 ">
                        <br>
                        <input type="text" class="form-control" id="bus" name="busqueda" placeholder="Nombre del producto">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12  col-md-12 col-xs-12 ">
                        <span>Mostrar por : </span>
                        <select name="cantidad" id="cantidad">
                            <option value="4">4</option>
                            <option value="8">8</option>
                        </select>
                    </div> 
                    <br>
                    <div id='tbProductoInicio' class="tab-pane fadeProd">
                    </div>
                    <div class="text-center paginacion">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  CATEGORIA  --> 
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <div class="panel panel-defaul">
                <div class="panel-heading"  style=" color:#000000; ">
                    <div style=" color:#000000; border-bottom: 1px solid #DDDDDD;" id="headProd">
                        <span style=" border-bottom:3px #FF5857 solid;">CATEGORÍAS</span>
                    </div>
                </div>
                <div class="panel-body">
                    <table id="tbCategoriaInicio" class="table table-responsive">
                        <thead>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- COMO ENVIAR UN CORREO-->
        <div class="col-lg-9 col-md-9 text-center">

            <div class="col-lg-12 col-md-12 col-xs-12">

                <div style=" color:#000000; border-bottom: 1px solid #DDDDDD;" id="headProd">
                    <span style=" border-bottom:3px #FF5857 solid; padding-bottom: 2px;">CONSULTAR POR UN PRODUCTO</span>
                </div>

            </div> 
            <br>
            <br>
            <div class="media col-md-3 col-md-offset-1 col-xs-12" style="color:#000000;">

                <img class="center-block img-circle" style=" width: 42px; height: 42px; padding: 8px;  background: #FFC60A;" src="<?php echo base_url()?>assets/images/img/search.png">
                <div class="media-body" style="padding: 2px;">
                    <h4 class="text-center envio">BUSCA TU PRODUCTO</h4>
                    <p> Busca por nombre del producto en específico o por las categorías.</p>
                </div>
            </div>


            <div class="media col-md-3 col-md-offset-1 col-xs-12" style="color:#000000;">

                <img class="center-block img-circle" style="width: 42px; height: 42px;  padding: 8px;  background: #FFC60A;" src="<?php echo base_url()?>assets/images/img/check-symbol.png">
                <div class="media-body" style="padding: 2px;">
                    <h4 class="text-center envio">REVISA EL PRODUCTO</h4>
                    <p> Todos los productos cuentan con código, nombre, valor y descripción.</p>
                </div>
            </div>

            <div class="media col-md-3 col-md-offset-1 col-xs-12" style="color:#000000;">

                <img class="center-block img-circle" style=" width: 42px; height: 42px;  padding: 8px;  background:#FFC60A;" src="<?php echo base_url()?>assets/images/img/export.png">
                <div class="media-body" style="padding: 2px;">
                    <h4 class="text-center envio">ENVÍA TU CONSULTA</h4>
                    <p> Comunícate con nosotros a través de nuestro correo o red social.</p>
                </div>
            </div>

        </div>
    </div>
</div>