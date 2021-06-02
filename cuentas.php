<?php

$nombresUsuarios = [
	'marley',
	'katatekid',
	'ramon',
	'naruto',
	'angusyoung',
	'oliveratom',
	'elindio',
	'adrianm',
	'nicolas'
];

$usuario = $_REQUEST["usuario"];
$existe = 0;

for ($i=0; $i < count($nombresUsuarios); $i++) { 
	if($usuario == $nombresUsuarios[$i]){
		$existe = 1;
	}
}

if($existe){
	//echo "El usuario ya existe";
	echo true;
}else{
	//echo "El usuario está disponible";
	echo false;
}

?>