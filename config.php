<?php

define('TIMEZONE', 'Africa/Nairobi');
date_define_timezone_set(TIMEZONE);

class Database
{
    private $host = "localhost";
    private $db_name = "ltracker";
    private $username = "mabele";
    private $password = "Mabele2020*";
    public $conn;

    public function dbConnection()
	{

	    $this->conn = null;
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>
