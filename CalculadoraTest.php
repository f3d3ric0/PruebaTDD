<?php

use PHPUnit\Framework\TestCase;
use Calculadora as CA;

final class CalculadoraTest extends TestCase
{
	
	public function testSuma()
	{
		$calc= new CA();
		$this->assertEquals(7,$calc->suma(3,4));
	}

	public function testArray()
    {
    	$array = new CA();
        $this->assertArrayHasKey('foo', $array->retornarArray(['foo' => 'baz']));
    }

    public function testArrayVacio()
    {
    	$aux = new CA();
    	$array2 = [];
        $this->assertNotEmpty($aux->cargarArray($array2));
    }
}

?>