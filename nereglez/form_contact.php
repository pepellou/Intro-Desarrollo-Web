<?php

$comment ="";
foreach ($_POST as $key => $value) {
	$comment .= $key.":".$value."\n";
}
file_put_contents("./comments/".$_POST["email"].".txt", $comment);
?>
Comentario enviado