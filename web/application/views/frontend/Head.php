<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ALL PREMIUM CLOTHES</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/demo.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/misestilos.css" media="screen">
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script src="<?php echo base_url()?>assets/js/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <nav class="navbar">
            <div id ="contenedor" class="container">
                <br>
                <div class="row" style="color:#000000">
                    <h1 id="logo" class="text-center">ALL PREMIUM CLOTHES</h1>
                    <div id="sublogo" >DISEÑO DE PRODUCTOS DE VESTIR A PEDIDO.</div>
                </div>
                <br>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>

                </div>

                <div id="navbar" class="collapse navbar-collapse">


                    <a class="navbar-left" href="https://www.facebook.com" target="_BLANK" style="margin-right: 10px;">
                        <img class="center-block img-circle" style="width: 32px; height: 32px; margin-top:7px; padding: 8px;  background: #FF5857;" src="<?php echo base_url()?>assets/images/img/face.png"> 
                    </a>
                      
                    <a class="navbar-left" href="mailto:support@company.com" target="_BLANK">
                        <img class="center-block img-circle" style="width: 32px; height: 32px; margin-top:7px;  padding: 8px;  background: #FF5857;" src="<?php echo base_url()?>assets/images/img/gmail.png"> 
                    </a>


                    <ul  class="nav navbar-nav navbar-right navbar-default menuUl">

                        <li><a id="inicio" class="activo" href="<?php echo base_url('index.php/Inicio/index')?>">INICIO</a></li>
                        <li><a id="quienes" class="activo" href="<?php echo base_url('index.php/Buscar_por_categoria')?>">SOBRE NOSOTROS</a></li>
                        <li><a id="contacto" class="activo" href="<?php echo base_url('index.php/Contacto/index')?>">CONTACTANOS</a></li>

                    </ul>
                    <?php if ($this->session->userdata('login') == true) { ?>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user fa-fw"></i> <?= $this->session->userdata('name') ?> <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=""><a href="<?php echo base_url('categoria') ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Categorias</a></li>
                                    <li class=""><a href="<?php echo base_url('producto') ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Productos</a></li>
                                    <li><a href="javascript:void(0)" id="cerrar"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php } ?>
                </div> 
            </div>
        </nav>

