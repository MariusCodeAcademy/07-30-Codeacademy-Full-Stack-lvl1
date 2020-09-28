<?php
/* 
    0. nusistatyti prisijungimo kintamuosius
    1. prisijungti prie DB
    2. pasitikrinti ar yra klaidu
    3. atlikti norimus veiksmus (nuskaityti duomenis)
    */
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

    // gauti duomenis is lenteles
    public function getTableRows()
    {
        // nuskaityti, gauti visus stulpelius is lenteles cars
        $sql = "SELECT * FROM cars";

        // nusiusti uzklausa
        $resultMysqlObj = $this->conn->query($sql);

        // atsispausdinam ka gavom
        // print_r($resultMysqlObj);

        // pasitikriname ar gavome nors viena irasa(eilute)
        if ($resultMysqlObj->num_rows > 0) {
            // gavom bent viena eilute informacijos
            return $resultMysqlObj->fetch_all(MYSQLI_ASSOC);
        } else {
            // negavom nei vienos eilutes
            echo '0 eiluciu atitiko uzklausa<br>';
        }
    }



    public function closeConnection()
    {
        $this->conn->close();
    }
}// DB class END
