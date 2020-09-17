<?php

class Student
{
    // sukuriam savybes
    private $name; // undefined
    private $lname;
    public $middleName;
    private $fieldOfStudy;

    // susikuriam konstruktoriu
    public function __construct($aName, $aLasntName, $aFieldOfStudy)
    {
        // visi veiksmai bus atliekami kieviena karta sukuriant objekta
        $this->name = $aName;
        $this->lname = $aLasntName;
        $this->fieldOfStudy = $aFieldOfStudy;
    }

    // metodas
    public function getFullName()
    {
        return $this->name . ' ' . $this->lname;
    }
}
