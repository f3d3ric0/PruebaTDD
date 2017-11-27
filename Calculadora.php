<?php
/**
* 
*/
class Calculadora
{
	
	function __construct()
	{
		//echo "calculadora numerica";
	}

	public function suma($a,$b){
		return $a+$b;
	}

	public function retornarArray($array)
	{
		return $array;
	}

	public function cargarArray($array2)
	{
		if (empty($array2)){
			$b = "el array no puede estar vacio";
			echo $b;
			return $b;
		}
		else{
			return $array2;
		}
	}

}


?>