<?php

class Freelancer extends Employee
{
    // properties
    private $jobs;

    // overrride konstruktoriaus metodas
    public function __construct($argName, $argSurname)
    {
        // uzpildome varda ir pavarde pag taip kaip aprasyta tevineje klaseje
        parent::__construct($argName, $argSurname);
        $this->jobs = [];
    }

    // metodas priskirti darbui
    public function assignJob($job)
    {
        // pasitikriname ar darbas yra sukurtas pagal JOB klase
        if ($job instanceof Job) array_push($this->jobs, $job);
        else echo '<h3 style="color:tomato" >This job is not a valid!</h3>';
    }


    // metodas pabaigti darba
    public function finishJob($jobId)
    {
        // sukam cikla per sio darbuotojo darbu masyva
        foreach ($this->jobs as $job) {
            if ($job->getId() == $jobId) $job->finishJob();
        }
    }

    // darbo apmokejimo metodas 
    public function withdrawSalary()
    {
        $sum = 0.0;
        // sukame cikla per darbu masyva
        foreach ($this->jobs as $index => $job) {
            // patikrinti ar sio darbo done yra TRUE
            if ($job->done()) {
                // done === true
                $sum += $job->getAmount();
                // istrinti atlikta darba is sio darbuotojo darbu masyvo jobs
                array_splice($this->jobs, $index, 1);
            }
        }
        return $sum;
    }
}// class end
