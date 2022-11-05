<?php

class DataBase
{
    private $db_host = 'localhost';
    private $db_user = 'sakhawat';
    private $db_password = 'sakhawat';
    private $db_name = 'studentdb';

    private $mySqli = null;
    private $conn = false;
    private $result = array();

    public function __construct()
    {
        if (!$this->conn) {
            $this->mySqli = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);
            $this->conn = true;

            if ($this->mySqli->connect_errno) {
                array_push($this->result, $this->mySqli->connect_errno);

                return false;
            }
        } else {
            return true;
        }
    }

    //function to insert data into database
    public function insert($tableName, array $values)
    {
        if ($this->tableExist($tableName)) {
            $tableColumns = implode(', ', array_keys($values));
            $tableValues = implode("', '", $values);

            $query = "insert into $tableName ($tableColumns) VALUES ('$tableValues')";

            if ($this->mySqli->query($query)) {
                array_push($this->result, $this->mySqli->insert_id);

                return true;
            } else {
                array_push($this->result, $this->mySqli->connect_errno);

                return false;
            }
        } else {
            return false;
        }
    }

    //function to update row in database
    public function update()
    {
    }

    //function to delete table or row(s) from database
    public function delete()
    {
    }

    //function to select from the database
    public function select()
    {
    }

    private function tableExist($tableName)
    {
        $query = "SHOW TABLES FROM $this->db_name LIKE '$tableName'";

        $tableInDb = $this->mySqli->query($query);

        if ($tableInDb->num_rows == 1) {
            return true;
        } else {
            array_push($this->result, $tableName . " table does not exist in database");

            return false;
        }
    }

    public function getResult()
    {
        $res = $this->result;
        $this->result = array();

        return $res;
    }

    //close connection
    public function __destruct()
    {
        if ($this->conn) {
            if ($this->mySqli->close()) {
                $this->conn = false;
                return true;
            }
        } else {
            return false;
        }
    }
}
