<?php


namespace Src\SeleccionPersonaje;


class Personaje
{
    private $id;
    private $nombre;
    private $speed;
    private $acceleration;
    private $weight;
    private $handling;
    private $grip;
    private $car_id;

    /**
     * Personaje constructor.
     * @param $id
     * @param $nombre
     * @param $speed
     * @param $acceleration
     * @param $weight
     * @param $handling
     * @param $grid
     * @param $car_id
     */
    public function __construct(
        $id,
        $nombre,
        $speed,
        $acceleration,
        $weight,
        $handling,
        $grid,
        $car_id
    )
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->speed = $speed;
        $this->acceleration = $acceleration;
        $this->weight = $weight;
        $this->handling = $handling;
        $this->grip = $grid;
        $this->car_id = $car_id;
    }


    public function selectCar(Car $cart): void
    {
        $this->car_id = $cart->getId();
    }

    private function changeStateFromCart(Car $cart)
    {
        $suma = $this->speed + $cart->getSpeed();
        $this->speed = $suma;
        $this->acceleration += $cart->getAcceleration();
        $this->weight += $cart->getWeight();
        $this->handling += $cart->getHandling();
        $this->grip += $cart->getGrip();
    }

    public function printState()
    {
        $estado = <<<EOD
    Velocidad: $this->speed
    Aceleración: $this->acceleration
    Peso: $this->weight
    Handling: $this->handling
    Tracción: $this->grip
EOD;
        echo $estado;

    }
}
