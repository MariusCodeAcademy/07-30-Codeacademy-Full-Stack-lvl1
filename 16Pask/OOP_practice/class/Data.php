<?php

class Data
{
    private $name;
    private $lastName;
    private $subject;

    public function __construct($name, $lastName, $subject)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->subject = $subject;
    }

    // metodas sugeneruoti vienam lenteles eilutes yrasui
    public function gerenateRow()
    {
        $string = "
        <tr>
            <td>{$this->name}</td>
            <td>{$this->lastName}</td>
            <td>{$this->subject}</td>
        </tr>
        ";
        return $string;
    }
}
