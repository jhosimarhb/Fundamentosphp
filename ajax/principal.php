<html xmlns = " http : // www . w3 . org / 1999 / xhtml " > 
<head>
<meta http-equiv = "Content-Type" content = "text / html; charset = utf-8" />   
<title> Usando Ajax con PHP / MySQL </title>
<link rel = "hoja de estilo" href = " style.css" />   
<script type = "text / javascript" src = " bootstrap/js/script.js" > </script>  
</head>
 
<body>
    <div class = "container" > 
        <div class = "header" > 
             
        </div> 
        <h1 class = "main_title" > Usando Ajax con PHP / MySQL </h1> 
        <div class = "content" > 
            <fieldset class = "field_container" > 
                 
                <form>
                    <input type = "text" id = "nombre" class = "frm_input" placeholder = "Nombre completo" >    
                    <input type = "text" id = "apellido" class = "frm_input" placeholder = "apellido" >    
                    <input type = "text" id = "email" class = "frm_input" placeholder = "email" >
                    <input type = "text" id = "telefono" class = "frm_input" placeholder = "telefono" >    
                    <input type = "button" class = "frm_button" value = "Add" onclick = "add_member()">    
                </form>
            </fieldset>
            <fieldset class = "field_container" > 
               
                <div id = "list_container" > 
                    
                   <? php
                        // incluyendo el archivo de configuración
                        include ( 'config.php' );
                        $ pdo = conectar ();
                        // list_members: este archivo muestra la lista de miembros en una vista de tabla
                        include ( 'list_members.php' ); 
                    ?>
                </div> 
            </fieldset>
        </div>    
        <div class = "footer" > 
          
        </div> 
    </div> 
</body>
</html>
