<?php

class Worker extends Employee
{
    // properties
    private $hoursWorked;
    private $hourPay;

    // Overload pavyzdys construktoriaus funkcijai paduodane 1 
    // argumentu daugiau nei yra orginaliai
    public function __construct($argName, $argSurname, $argHourPay)
    {
        // kvieciame tevines klases konstruktoriu
        parent::__construct($argName, $argSurname);
        // sukuriant darbuotoja jis nera isdirbes ne kiek valandu
        $this->hoursWorked = 0;
        // priskiriame darbuotojo valandini atlyginima
        $this->hourPay = $argHourPay;
    }

    // sukuriam metoda darbuotojui isdirbti valanadu kieki
    public function work($hours)
    {
        $this->hoursWorked = $this->hoursWorked + $hours;
    }

    // atlyginimo skaiciavimas ploymorphism - tas pats funkcijos pavadinimas bet skaiciuojamas
    // atlyginimas visiskai skirtingai
    public function withdrawSalary()
    {
        // padauginame valandas is valandinio
        $amount = $this->hoursWorked * $this->hourPay;
        // nunulinam valandas kad nemoketi uz tas pacias kita karta
        $this->hoursWorked = 0;
        return $amount;
    }
}
