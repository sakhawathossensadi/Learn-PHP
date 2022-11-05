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
    public function select($table, $rows = "*", $join = null, $where = null, $orderBy = null, $limit = null)
    {
        if ($this->tableExist($table)) {
            $query = "SELECT $rows FROM $table";
            if ($join != null) {
                $query = $query . " JOIN $join";
            }
            if ($where != null) {
                $query = $query . " Where $where";
            }
            if ($orderBy != null) {
                $query = $query . " ORDER BY $orderBy";
            }
            if ($limit != null) {
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $start = ($page - 1) * $limit;
                $query = $query . " LIMIT $start, $limit";
            }

            echo $query . "<br>";

            $query = $this->mySqli->query($query);

            if ($query) {
                $this->result = $query->fetch_all(MYSQLI_ASSOC);

                return true;
            } else {
                array_push($this->result, $this->mySqli->error);

                return false;
            }
        } else {
            return false;
        }
    }

    public function pagination($table, $join = null, $where = null, $limit = null)
    {
        if ($this->tableExist($table)) {
            if ($limit != null) {
                $query = "SELECT COUNT(*) FROM $table";
                if ($join != null) {
                    $query = $query . " JOIN $join";
                }
                if ($where != null) {
                    $query = $query . " Where $where";
                }

                $query = $this->mySqli->query($query);

                $totalRecord = $query->fetch_array();
                $totalRecord = $totalRecord[0];
                $totalPages = ceil($totalRecord / $limit);

                $url = basename($_SERVER['PHP_SELF']);

                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }

                $output = "<ul class='pagination'>";

                if ($page > 1) {
                    $output = $output . "<li><a href='$url?page=" . ($page - 1) . "'>Prev</a></li>";
                }

                if ($totalRecord > $limit) {
                    for ($i = 1; $i <= $totalPages; $i++) {
                        if ($i == $page) {
                            $cls = "class='active-class'";
                        } else {
                            $cls = '';
                        }
                        $output = $output . "<li><a $cls href='$url?page=$i'>$i</a></li>";
                    }
                }

                if ($totalPages > $page) {
                    $output = $output . "<li><a href='$url?page=" . ($page + 1) . "'>Next</a></li>";
                }

                $output = $output . "</ul>";

                return $output;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function sqlCommand($sqlQuery)
    {
        $query = $this->mySqli->query($sqlQuery);

        if ($query) {
            $this->result = $query->fetch_all(MYSQLI_ASSOC);

            return true;
        } else {
            array_push($this->result, $this->mySqli->error);

            return false;
        }
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
