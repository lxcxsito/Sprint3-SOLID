<?php

class Athlete{
    private string $name;

    private string $country;


    public function __construct(string $name, string $country) {
        $this->name = $name;
        $this->country = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getName()
    {
        return $this->name;
    }
}


?>