<?php

$user_data = "";
foreach ($_POST as $campo => $valor) {
	$user_data .= $campo.":".$valor."\n";
}

file_put_contents(
	"./users/".$_POST["username"].".txt", 
	$user_data
);

?>
Registered!
