<?php

class DB
{
    // nusistatom savybes(properties)
    private $servername = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $dbname = 'cars_PHP';
    // savybe issaugoti prisijungimui
    public $conn;


    // sukuriant nauja objekta iskarto prisijungsime prie db
    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $this->checkConnection();
    }


    // metodas pasitikrinti prisijungimui
    private function checkConnection()
    {
        // pasitikrinti ar nera klaidu
        if ($this->conn->connect_error) {
            // yra klaidu ir nutriaukiam tolimesni kodo vygdyma
            die('Connection failed: ' . $this->conn->connect_error);
        } else {
            echo 'Prisijungta<br>';
        }
    }

    // sukurti viena lenteles yrasa
    public function addCar($carBrand, $carModel, $carEngine, $carYear)
    {
        $sql = "INSERT INTO cars (brand, model, engineVolume, year)
        VALUES('$carBrand', '$carModel', $carEngine, $carYear)";

        // pasitikrinti ar irasas sekmingas
        if ($this->conn->query($sql) === TRUE) {
            // irasas irasytas sekmingai sekmnigai
            echo 'irasas irasytas<br>';
        } else {
            echo 'ivyko klaida: ' . $this->conn->error;
        }
    }



    public function closeConnection()
    {
        $this->conn->close();
    }
}// DB class END
