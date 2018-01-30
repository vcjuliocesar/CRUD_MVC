<?php
namespace App\db;

use PDO;

class Connection extends PDO
{
    private $sql;
    private $result;
    public function __construct()
    {
        try {
            parent::__construct("mysql:host=localhost;dbname=sakila", "root", "sesamo");
        } catch (PDOException $e) {
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit();
        }
    }

    protected function setQuery($query)
    {
        $this->sql=$query;
    }

    private function execute_query()
    {
        $this->result=$this->prepare($this->sql);
        $this->result->execute();
    }

    protected function getArrayAssocc()
    {
        $this->execute_query();
        return $this->result->fetchall(PDO::FETCH_ASSOC);
        $this->close();
    }

    public function alter()
    {
        $this->execute_query();
        return $this->result;
        $this->close();
    }
}
