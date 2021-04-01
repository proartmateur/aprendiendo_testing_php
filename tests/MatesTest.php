<?php

namespace Tests;

use Src\Mates;
use PHPUnit\Framework\TestCase;

class MatesTest extends TestCase
{
    public function test_suma_1_mas_1_igual_2()
    {
        $a = 1;
        $b = 1;
        $c = Mates::suma($a, $b);
        $this->assertEquals(2, $c);
    }

    public function test_deberia_sumar_dos_numeros_negativos()
    {
        $a = -1;
        $b = -1;
        $c = Mates::suma($a, $b);
        $this->assertEquals(-2, $c);
    }

    public function test_deberia_sumar_un_negativo_con_un_positivo()
    {
        $a = -1;
        $b = 1;
        $c = Mates::suma($a, $b);
        $this->assertEquals(0, $c);
    }

    public function test_suma_int_mas_string_igual_deberia_mandar_error()
    {
        //No debería sumar enteros con strings
        $a = 1;
        $b = "Assert";

        try {
            $c = Mates::suma($a, $b);
            $this->assertTrue(false);
        } catch (\Exception $e) {
            $this->assertTrue(true);
        }
    }
}
