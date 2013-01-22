<?php


/* 
    ==========================================
    conectarse: funcion para conectarnos a 
	la base de datos(BCGARCIA). se establece 
	la url donde se encuentra 
	la contraseña y el nombre de usuario
	------------
	
	en caso de no encontrar la BD o estar 
	mal los datos de acceso muestra un error,
	de lo contrario devuelve el link de acceso
	
	==========================================

*/

function conectarse(){

	if (! ( $link = mysql_connect("localhost:8888","root","root") ) ) {
		
		return "ERROR de conexion a la base de datos!";
		exit();
	
	}
	
	if ( !(mysql_select_db("BCGARCIA",$link) ) ) {
		
		return "ERROR al seleccionar la base de datos";
		exit();
	}
	
	return $link;
}

?>