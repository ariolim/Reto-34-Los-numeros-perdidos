<?php


use PHPUnit\Framework\TestCase;

include_once 'numerosPerdidos.php';

class Test extends TestCase
{

    function testFunctionReturnsAArrayIfEmptyArray()
    {
        $resultado = numerosPerdidos(array());
        self::assertIsArray($resultado);
    }

    function testCheckThrowsExceptionIfNotAValidArray()
    {
        try {
            $array = numerosPerdidos(array(2, "prueba"));
        } catch (Exception $e) {
            self::assertTrue(true, $e);
        }
    }

    function testCheckReturnsArrayWithMissingNumbers()
    {
        $array = numerosPerdidos(array(2, 3, 5, 6, 8));
        self::assertEquals(array_values([4, 7]),array_values($array));
    }
}
