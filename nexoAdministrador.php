<?php

class nexoAdministrador
{
	public static function Guardar($patente)
	{
		$archivo=fopen("usuarioTxt/usuariosLogin.txt", "a");//escribe y mantiene la informacion existente		
		$ahora="Prueba";//date("Y-m-d H:i:s"); 
		$renglon="$patente"."=>".$ahora."\n";
		fwrite($archivo, $renglon); 		 
		fclose($archivo);
	}
}

?>