<?php
include 'turbo.php';
class Car{
    use Turbo;
    private $brand;
    private $plate;
    private $fuelType;
    private$maxSpeed;

    public function __construct(string $brand, string  $plate, string $fuelType, int $maxSpeed){
        $this->brand = $brand;
        $this->plate = $plate;
        $this->fuelType = $fuelType;
        $this->maxSpeed = $maxSpeed;
    }

}
