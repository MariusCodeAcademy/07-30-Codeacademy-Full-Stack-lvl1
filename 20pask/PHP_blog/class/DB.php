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
    private $dbname = 'PHP_blog';
    // savybe issaugoti prisijungimui
    public $conn;


    // sukuriant nauja objekta iskarto prisijungsime prie db
    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $this->checkConnection();
    }

    public function getConnection()
    {
        return $this->conn;
    }

    private function makeSendQuery($queryText, $msg)
    {
        // pasitikrinti ar irasas sekmingas
        if ($this->conn->query($queryText) === TRUE) {
            // irasas irasytas sekmingai sekmnigai
            echo '<div class="alert alert-info">' . $msg . '</div>';
        } else {
            echo '<div class="alert alert-danger">ivyko klaida: ' . $this->conn->error . '</div>';
        }
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
    // sukurti lentele irasams
    public function createPostsTable()
    {
        $sql = "
        CREATE TABLE Posts (
            id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(30) NOT NULL,
            author VARCHAR(30) NOT NULL,
            body TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        $this->makeSendQuery($sql, 'lentele Posts sukurta sekmingai');
    }

    // sukurti viena lenteles yrasa
    public function addPost($postTitle, $postAuthor, $postBody)
    {
        $sql = "INSERT INTO Posts (title, author, body)
        VALUES('$postTitle', '$postAuthor', '$postBody')";

        // po refactorinimo
        $this->makeSendQuery($sql, 'Irasas skurtas sekmingai!!!');
    }

    // metodas atnaujinti irasaui duomenu bazeje
    public function updatePost($postTitle, $postAuthor, $postBody, $postId)
    {
        $sql = "
            UPDATE Posts
            SET title='$postTitle', author='$postAuthor', body='$postBody'
            WHERE id='$postId'
            LIMIT 1
        ";

        $this->makeSendQuery($sql, 'Irasas atnaujintas sekmingai!!!');
    }



    // gauti duomenis is lenteles
    public function getPostsArray()
    {
        // nuskaityti, gauti visus stulpelius is lenteles cars
        $sql = "SELECT * FROM Posts";

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
            echo '<div class="alert alert-danger">0 eiluciu atitiko uzklausa</div>';
        }
    }

    // metodas gauti viena posta pagal duota id
    public function getPost($postId)
    {
        $sql = "SELECT * FROM Posts WHERE id = $postId";

        // nusiusti uzklausa
        $resultMysqlObj = $this->conn->query($sql);

        // atsispausdinam ka gavom
        // print_r($resultMysqlObj);

        // pasitikriname ar gavome nors viena irasa(eilute)
        if ($resultMysqlObj->num_rows > 0) {
            // gavom bent viena eilute informacijos
            return $resultMysqlObj->fetch_assoc();
        } else {
            // negavom nei vienos eilutes
            echo '<div class="alert alert-danger">0 eiluciu atitiko uzklausa</div>';
        }
    }

    // delete post metodas 
    public function deletePost($postId)
    {
        // sql
        $sql = "DELETE FROM Posts
                WHERE id = $postId
                LIMIT 1";

        $this->makeSendQuery($sql, 'Irasas istrintas sekmingai!!!');
    }



    public function closeConnection()
    {
        $this->conn->close();
    }
}// DB class END
