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

	public function testFailure()
    {
    	$array = new CA();
        $this->assertArrayHasKey('foo', $array->cargarArray(['foo' => 'baz']));
    }

}

// class ArrayHasKeyTest extends TestCase
// {
//     public function testFailure()
//     {
//     	$array = new CA();
//         $this->assertArrayHasKey('foo', $array->cargarArray(['bar' => 'baz']));
//     }
// }
?>