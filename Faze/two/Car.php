<?php

class Car
{
    private string $ownerFirst;
    private string $ownerLast;
    private string $carType;
    private string $carModel;
    private string  $spz;


    public function __construct(string $ownerFirst, string $ownerLast, string $carType, string $carModel,string $spz){
        $this->ownerFirst =$ownerFirst;
        $this->ownerLast =$ownerLast;
        $this->carType =$carType;
        $this->carModel =$carModel;
        $this->spz =$spz;
    }
    public function owner()
    {
        echo 'Auto s SPZ: '.$this->spz.' patří majtely: '.$this->ownerFirst.' '. $this->ownerLast;
    }


    public function getSpz(): string
    {
        return $this->spz;
    }


    public function setSpz(string $spz): void
    {
        $this->spz = $spz;
    }
}

$skoda= new Car('John', 'Walker', 'Škoda', 'Fabia', '6c21996');
$skoda->owner();
echo '<br>';
$skoda->setSpz('9A61993');
$skoda->owner();
