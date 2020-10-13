<?php

class Car {

    //nbWheels
    private $nbWheels = 4;

    public function getnbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels) : int
    {
        $this->nbWheels = $nbWheels;
    }


    //currentSpeed
    private $currentSpeed;

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): int
    {
        $this->currentSpeed = $currentSpeed;
    }

    //color
    private $color;
    public function getColor(): string
    {
        return $this->color;
    }

    //nbSeats
    private $nbSeats;
    public function getnbSeats(): int
    {
        return $this->nbSeats;
    }


    //Energy
    private $energy;

    public function getenergy(): string
    {
        return $this->energy;
    }
    //EnergyLevel
    private $energyLevel;

    public function getenergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): int
    {
        $this->energyLevel = $energyLevel; 
    }

    //construct
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color= $color;
        $this->nbSeats= $nbSeats;
        $this->energy= $energy; 
    }

    //Forward
    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    //Start
    public function start()
    {
        $sentence = "";
        while ($this->currentSpeed < 10) {
            $this->currentSpeed++;
        }
        $sentence .= "I'm going!";
        return $sentence;
    }

    //Brake
        public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}


