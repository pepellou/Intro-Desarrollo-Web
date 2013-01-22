<?php
/* 
    ==========================================
    login:  se procesan los datos introducidos
	en el form y se cotejan con los almacenados
	en la BD
	
	------------
	
	si existen los datos se devuelve una
	variable de sesion, y se permite el acceso,
	en caso contrario se deniega el acceso. 
	==========================================

*/

session_start();

include("conectarse.php");

$link = conectarse();
$usu = $_POST[ 'email_user' ] ;
$pass = $_POST[ 'pass_user' ] ;


$query = "SELECT * FROM clientes WHERE password='".$_POST[ 'pass_user' ]."'" ;

$result=mysql_query( $query , $link);  

if ( $fila = mysql_fetch_array( $result ) ) {

	if ( ( $fila['email'] == $_POST[ 'email_user' ] ) && ( $fila['password'] == $_POST[ 'pass_user' ] ) ) {
	
		$_SESSION[ 'id' ] = $fila[ 'personaContacto'] ;
		$salida = true;
		
	}
	else  $salida = false;
	
} 
else  $salida = false;


echo json_encode($salida);



?>