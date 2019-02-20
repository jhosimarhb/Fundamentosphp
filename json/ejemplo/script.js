function add_member() {
	// initialisation
	var url = 'agrregar_alumnos.php';
	var method = 'POST';
	var params = 'id='+document.getElementById('id');
	params += '&nombre='+document.getElementById('nombre');
	params += '&apellido='+document.getElementById('apellido');
	params += '&email='+document.getElementById('email');
	params += '&telefono='+document.getElementById('telefono');
	var container_id = 'list_container' ;
	
	// call ajax function
	ajax (url, method, params, container_id) ;
}
 
// delete_member function
function delete_member(id) {
	if (confirm('¿Está seguro de eliminar este miembro?')) {
		// initialisation
		var url = 'borrar_alumnos.php';
		var method = 'POST';
		var params = 'id='+id;
		var container_id = 'list_container' ;
		
		// call ajax function
		ajax (url, method, params, container_id) ;
	}
}
 
// ajax : basic function for using ajax easily
function ajax (url, method, params, container_id) {
    try { // For: chrome, firefox, safari, opera, yandex, ...
    	xhr = new XMLHttpRequest();
    } catch(e) {
	    try{ // for: IE6+
	    	xhr = new ActiveXObject("Microsoft.XMLHTTP");
	    } catch(e1) { // if not supported or disabled
		    alert("Not supported!");
		}
	}
	xhr.onreadystatechange = function() {
						       if(xhr.readyState == 4) { // when result is ready
							       document.getElementById(container_id).innerHTML = xhr.responseText;
							   } 
						   	}
	xhr.open(method, url, true);
	//xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhr.send(params);
}