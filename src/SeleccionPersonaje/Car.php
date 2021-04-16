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
