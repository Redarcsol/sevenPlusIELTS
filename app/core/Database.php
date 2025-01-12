<?php
class DatabaseException extends Exception {}

trait Database
{
    private $connection = null;

    public function getConnection()
    {
        if ($this->connection === null) {
            try {
                $host = DBHOST;
                $db = DBNAME;
                $user = DBUSER;
                $pass = DBPASS;
                $this->connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                throw new DatabaseException("Database connection failed: " . $e->getMessage());
            }
        }
        return $this->connection;
    }

    // Query method to execute SQL queries
    public function query($query, $data = [])
    {
        $con = $this->getConnection();  // Accessing the non-static method
        $stmt = $con->prepare($query);
        $check = $stmt->execute($data);

        if ($check) {
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result;
            }
        }
        return false;
    }
}
