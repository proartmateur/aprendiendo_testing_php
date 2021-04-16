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

    private $car;
    private $max_property_size;

    /**
     * Personaje constructor.
     * @param $id
     * @param $nombre
     * @param $speed
     * @param $acceleration
     * @param $weight
     * @param $handling
     * @param $grip
     * @param $car_id
     */
    public function __construct(
        $id,
        $nombre,
        $speed,
        $acceleration,
        $weight,
        $handling,
        $grip,
        $car_id
    )
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->speed = $speed;
        $this->acceleration = $acceleration;
        $this->weight = $weight;
        $this->handling = $handling;
        $this->grip = $grip;
        $this->car_id = $car_id;

        $this->max_property_size = 5;
    }

    //region Getter
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    public function getNombre():int
    {
        return $this->nombre;
    }


    public function getSpeed():int
    {
        return $this->limite_state_property($this->speed + $this->car->getSpeed());

    }


    public function getAcceleration():int
    {
        return $this->limite_state_property($this->acceleration + $this->car->getAcceleration());
    }


    public function getWeight():int
    {
        return $this->limite_state_property($this->weight + $this->car->getWeight());
    }


    public function getHandling():int
    {
        return $this->limite_state_property($this->handling + $this->car->getHandling());
    }

    public function getGrip():int
    {
        return $this->limite_state_property($this->grip + $this->car->getGrip());
    }

    /**
     * @return mixed
     */
    public function getCarId()
    {
        return $this->car_id;
    }
    //endregion


    public function selectCar(Car $cart): void
    {
        $this->car_id = $cart->getId();
        $this->car = $cart;
    }

    private function limite_state_property(int $property){
        if($property > $this->max_property_size){
            return $this->max_property_size;
        }
        return $property;
    }


}
