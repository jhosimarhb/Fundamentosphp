<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>
	//definimos el costructor de persona
	function Persona(primerNombre){
		this.primerNombre = primerNombre;
	}
//agregar un par de metodos a persona
	Persona.prototype.caminar= function(){
		alert("estoy caminando");

	};
	Persona.prototype.diHola = function(){
		alert("Hola, soy "+ this.primerNombre);
	};
	//definimos el costructor estudiante
	function Estudiante(primerNombre, asignatura){
		//llamamos al constructor padre
		Persona.call(this, primerNombre);
		//inicializamos las propiedades e´pesificas de estudiantes
		this.asignatura= asignatura;


	};
	//creamos el objeto estudiante.prototype que hereda de persona
	Estudiante.prototype= object.create(Persona.prototype);
//para estableser la propiedad constructor para referir al estudiante
	Estudiante.prototype.constructor=Estudiante;
//remplasar el metodo dihola
    Estudiante.prototype.diHola = function(){
    	alert("Hola soy "+ this.primerNombre+".Estoy estudiando"+ this.asignatura+".");
    };
    //agregamos el metodo diadios
    Estudiante.prototype.diAdios=function(){
    	alert("¡Adios!");
    };

    var estudiante1=new Estudiante("Carolina","física aplicada");
    estudiante1.diHola();
    estudiante1.caminar();
    estudiante1.diAdios();
    document.write(Estudiante);

    //comprovar que las instancias funcionan correctamente
</script>
</body>
</html>