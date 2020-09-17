<?php

class LivingThing
{
    // savybes
    protected $birthDate;

    // konstruktorius
    public function __construct($date)
    {
        $this->birthDate = $date;
    }

    // seteris 
    public function setBdate($newDate)
    {
        // galimos ivairios apsaugos funkcijos ir patikrinimai
        $this->birthDate = $newDate;
    }

    // getteris 
    public function getBdate()
    {
        // galimos ivairios apsaugos funkcijos ir patikrinimai
        return $this->birthDate;
    }
}
