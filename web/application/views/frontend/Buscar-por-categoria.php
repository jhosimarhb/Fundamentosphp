<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script>
    $(document).ready(function () {
        $(".fadeProd").hide().fadeIn(4000);
    });
</script>
<!-- CONTENEDOR  PRINCIPAL--> 
<div class="container">
    <hr>
    
    <div class="row">
         <!-- COMO ENVIAR UN CORREO-->
        <div class="col-lg-12 col-md-12 text-center">

          <div class="item active">
                <img src="http://lorempixel.com/880/200/fashion/6" alt="..." style="width:100%">
                <div class="carousel-caption">
                    <div style="margin-top:-250px; font-family: 'Roboto', sans-serif; font-size: 18px;" >ARTÍCULOS POR CATEGORIA</div> <span style=" margin-top:-250px;background: #FF5F5E; opacity: 0.7; font-family: 'Roboto', sans-serif; font-size: 14px;"> ¿Necesitas una búsqueda mas precisa? Selecciona la categoría y revisa los productos.</span>
                </div>
            </div>
            
            <br>
            <div class="media col-lg-4 col-md-4 col-xs-12" style="color:#000000;">

                <img class="center-block img-circle" style=" width: 42px; height: 42px; padding: 8px;  background: #FFC60A;" src="<?php base_url(); ?>assets/images/img/search.png">
                <div class="media-body" style="padding: 2px;">
                    <h4 class="text-center envio">BUSCA TU PRODUCTO</h4>
                    <p> Busca por nombre del producto en específico o por las categorías.</p>
                </div>
            </div>

            <div class="media col-lg-4 col-md-4  col-xs-12" style="color:#000000;">

                <img class="center-block img-circle" style="width: 42px; height: 42px;  padding: 8px;  background: #FFC60A;" src="<?php base_url(); ?>assets/images/img/check-symbol.png">
                <div class="media-body" style="padding: 2px;">
                    <h4 class="text-center envio">REVISA EL PRODUCTO</h4>
                    <p> Todos los productos cuentan con código, nombre, valor y descripción.</p>
                </div>
            </div>

            <div class="media col-lg-4 col-md-4  col-xs-12" style="color:#000000;">

                <img class="center-block img-circle" style=" width: 42px; height: 42px;  padding: 8px;  background:#FFC60A;" src="<?php base_url(); ?>assets/images/img/export.png">
                <div class="media-body" style="padding: 2px;">
                    <h4 class="text-center envio">ENVÍA TU CONSULTA</h4>
                    <p> Comunícate con nosotros a través de nuestro correo o red social.</p>
                </div>
            </div>

        </div>
    </div>
    
    <br>
    <br>
    <br>
    
    
    <!--  PAGINACION Y MOSTRAR DATOS  --> 
    <div class="row">
        <!-- CATEGORIA -->

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

        <!-- MOSTRAR PRODUCTOS -->
        <div class="col-lg-9 col-md-9">
            <div class="panel panel-defaul">
                
                <div class="panel-heading">
                    <div style=" color:#000000; border-bottom: 1px solid #DDDDDD;" id="headProd"><span>PRODUCTOS ENCONTRADOS EN LA CATEGORIA : &nbsp; </span><strong><span id="spn" style="color:#FF5F5E; text-transform: uppercase;"></span></strong> </div>
                </div>
            
                <div class="row">
                    <div class="col-lg-12  col-md-12 col-xs-12 ">
                        <span>Mostrar por : </span>
                        <select name="cantidad" id="cantidad2">
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

</div>
