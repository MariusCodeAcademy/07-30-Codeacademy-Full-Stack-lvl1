<?php

abstract class Employee
{
    // absirasom savybes(kaipo sukuriam vietinius kintamuosius)
    protected $name;
    protected $surname;

    public function __construct($argName, $argSurname)
    {
        // veiksmai atliekami sukuriant objekta
        $this->name = $argName;
        $this->surname = $argSurname;
    }

    public function getFullName()
    {
        return $this->name . ' ' . $this->surname;
    }

    // sitas metodas tures buti aprasytas sios klases vaikinese klasese.
    abstract public function withdrawSalary();
}
