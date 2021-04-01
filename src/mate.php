<?php

function suma(int $a, int $b): int
{
    return intval($a) + intval($b);
}

function test_suma()
{
    echo "\ntest_suma()\n"; // identificador de nuestro escenario


    //¿Cómo se usa?
    // Desarrollo de nuestro entorno de ejecucón de la funcionalidad
    $a = 1;
    $b = 1;
    $c = suma($a, $b);


    // Validar que el resultado es el esperado -> Assert
    if ($c === 2) {
        echo "Todo bien: $c";
    } else {
        echo "Algo salió mal :(";
    }
    echo "\n";

}

function test_suma_2()
{

    echo "\ntest_suma_2()\n";
    $a = 2;
    $b = 2;

    $c = suma($a, $b);

    if ($c === 4) {
        echo "Todo bien: $c";
    } else {
        echo "Algo salió mal :(";
    }
    echo "\n";
}

test_suma();

test_suma_2();
