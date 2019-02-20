<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8"/>
 <title>Usando Ajax con PHP MySQL: Ejemplos</title>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <script src="bootstrap/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="script.js"></script>
</head>
 <body>
 <div class="container">
   <h1 class="main_title">Usando Ajax con PHP MySQL: Ejemplos</h1>
   <div class="content">
     <div class="panel panel-default">
       <div class="panel-body">
         <h3> Agregar Alumnos</h3>
         <form>
           <div class="form-group">
             <div class="col-sm-2">
               <input type="text" id="nombre" class="form-control" placeholder="Nombres">
             </div>
             <div class="col-sm-2">
               <input type="text" id="apellido" class="form-control" placeholder="Apellidos">
             </div>
             <div class="col-sm-2">
               <input type="text" id="email" class="form-control" placeholder="Email">
             </div>
             <div class="col-sm-2">
               <input type="text" id="telefono" class="form-control" placeholder="Telefono">
             </div>
             <div class="col-sm-1">
             
               <input type="button" class="btn btn-primary" value="Agregar" onclick="add_member()">
             </div>
             <div class="col-sm-1">
               <input type="reset" class="btn btn-default" value="Limpiar">
             </div>
           </div>
         </form>
         <div style="clear:both"></div>
       </div>
     </div>
     <hr>
     <div class="panel panel-default">
       <div class="panel-body">
         <h3> Lista de alumnos</h3>
         <div id="list_container">
           <?php 
                        // inlcuimos la conexion con el servidor
                        include('conexion.php');
                        $pdo = connect();
                        // Incluir para ver la totalidad de alumnos
                        include('lista_alumnos.php'); 
                    ?>
         </div>
         <!-- lista_contenedor --> 
       </div>
       <!-- content -->
       <div class="footer"> </div>
       <!-- footer --> 
     </div>
   </div>
   <!-- panel 2 --> 
 </div>
 <!-- container -->
</body>
</html>