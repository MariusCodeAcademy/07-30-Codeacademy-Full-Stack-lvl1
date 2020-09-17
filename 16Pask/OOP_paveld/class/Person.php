<?php

class Person extends LivingThing
{
    // savybes
    private $name;
    private $lname;

    // konstruktorius
    public function __construct($aName, $aLname, $birthdate)
    {
        parent::__construct($birthdate);
        $this->name = $aName;
        $this->lname = $aLname;
    }

    // method
    public function getPersonInfo()
    {
        return $this->name . ' ' . $this->lname . ' yra gimes ';
    }
}
