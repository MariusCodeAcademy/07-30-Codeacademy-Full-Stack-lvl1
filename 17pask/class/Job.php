<?php

class Job
{
    // private properties
    private $id;
    private $title;
    private $amount;
    private $done;

    // darbo sukurimo metu paduodami argumentai ir nustatomos reiksmes 
    public function __construct($argTitle, $argAmount)
    {
        $this->title = $argTitle;
        $this->amount = $argAmount;
        $this->done = false;
    }

    // metodas geteris savybei ID
    public function getId()
    {
        return $this->id;
    }

    // getteris metodas savybei done
    public function done()
    {
        return $this->done;
    }

    // getteris metodas savybei amount
    public function getAmount()
    {
        return $this->amount;
    }

    // getteris metodas gauti TITLE
    public function getTitle()
    {
        return $this->title;
    }

    // metodas pabaigti darba
    public function finishJob()
    {
        $this->done = true;
    }
}// class pabaiga