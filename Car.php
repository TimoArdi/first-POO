<?php

// Car.php

class Car
{
/// color
    private $color;
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }
    public function getColor(): string
    {
        return $this->color;
    }
///
/// currentSpeed
    private $currentSpeed;
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

/// nbSeats
    private $nbSeats = 5;
    public function getnbSeats(): string
    {
        return $this->nbSeats;
    }
///
/// nbWheels
    private $nbWheels = 4;
    public function getnbWheels(): string
    {
        return $this->nbWheels;
    }
    private $energy;
    public function getEnergy(): string
    {
        return $this->energy;
    }
    private $energyLevel;
    public function setEnergyLevel(string $energyLevel) : void
    {
        $this->energyLevel = $energyLevel;
    }
    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }
///
/// Methods
///
    public function forward()
    {
        $this->currentSpeed = 30;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;

        }
        $sentence .= "Brake !!! <br>";
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function startCar()
    {
        $sentence = "";
        if($this->currentSpeed === 0){
            $sentence = "Je demarre la voiture <br>";
            return $sentence;
        }
        if($this->currentSpeed > 0){
            $sentence = "On est déja en route <br>";
            return $sentence;
        }


    }

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
}
