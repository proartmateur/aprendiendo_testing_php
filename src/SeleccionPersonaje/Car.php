<?php


namespace Src\SeleccionPersonaje;


class Car
{
    private $id;

    private $body_id;
    private $wheels_id;
    private $paracaidas_id;

    private $speed;
    private $acceleration;
    private $weight;
    private $handling;
    private $grip;

    /**
     * Car constructor.
     * @param $id
     * @param $speed
     * @param $acceleration
     * @param $weight
     * @param $handling
     * @param $grip
     */
    public function __construct($id, $speed, $acceleration, $weight, $handling, $grip)
    {
        $this->id = $id;
        $this->speed = $speed;
        $this->acceleration = $acceleration;
        $this->weight = $weight;
        $this->handling = $handling;
        $this->grip = $grip;
    }


    public function selectParacaidas(){}
    public function selectWheels(){}
    public function selectBody(){}


    public function getId()
    {
        return $this->id;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getAcceleration()
    {
        return $this->acceleration;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getHandling()
    {
        return $this->handling;
    }

    public function getGrip()
    {
        return $this->grip;
    }

}
