<?php

namespace Tests\SeleccionPersonaje;

use phpDocumentor\Reflection\Utils;
use Src\SeleccionPersonaje\Car;
use Src\SeleccionPersonaje\Personaje;
use PHPUnit\Framework\TestCase;

function printPersonajeState(Personaje $personaje)
{
    $speed = $personaje->getSpeed();
    $acceleration = $personaje->getAcceleration();
    $weight = $personaje->getWeight();
    $handling = $personaje->getHandling();
    $grip = $personaje->getGrip();

    $state = <<<EOD
    Speed: $speed
    Acceleration: $acceleration
    Weight: $weight
    Handling: $handling
    Grip: $grip
EOD;
    echo $state;

}

class PersonajeTest extends TestCase
{
    public function test_Personaje_cambiar_coche()
    {
        $cart_id = "1234";
        $mario = new Personaje(
            "123",
            "Mario",
            0,
            0,
            0,
            0,
            0,
            $cart_id
        );

        $cart = new Car(
            $cart_id,
            3,
            2,
            1,
            1,
            1
        );

        $mario->selectCar($cart);
        printPersonajeState($mario);
        //Creando un nuevo carro
        $cart_2 = new Car(
            $cart_id,
            4,
            3,
            3,
            1,
            3
        );
        $mario->selectCar($cart_2);
        echo "\n Nuevo Carro: \n";
        printPersonajeState($mario);
        $this->assertEquals(4, $mario->getSpeed());
    }

    public function test_Personaje_cambiar_coche_2_selects()
    {
        $cart_id = "1234";
        $mario = new Personaje(
            "123",
            "Mario",
            1,
            0,
            0,
            0,
            0,
            $cart_id
        );

        $cart = new Car(
            $cart_id,
            3,
            2,
            1,
            1,
            1
        );

        $mario->selectCar($cart);
        printPersonajeState($mario);
        //Creando un nuevo carro
        $cart_2 = new Car(
            $cart_id,
            4,
            3,
            3,
            1,
            3
        );
        $mario->selectCar($cart_2);
        echo "\n Nuevo Carro: \n";
        printPersonajeState($mario);

        $cart_3 = new Car(
            $cart_id,
            5,
            1,
            2,
            1,
            3
        );
        $mario->selectCar($cart_3);
        echo "\n Nuevo Carro: \n";
        printPersonajeState($mario);
        $this->assertEquals(5, $mario->getSpeed());
    }
}
