<?php

// Bicycle.php

class Bicycle
{

    private $color;


    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }
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


    private $nbSeats = 1;

    private $nbWheels = 2;

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

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

    public function __construct(string $color, int $currentSpeed)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
    }
}
