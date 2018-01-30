<?php
namespace App\models;

use App\db\Connection;

class Actor_model extends Connection
{
    private $db;
    public $actor_id;
    public $first_name;
    public $last_name;
    //public $last_update;
    protected $original = true;
    public function __construct()
    {
        try {
            $this->db = new Connection();
        } catch (PDOException $e) {
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
        }
    }

    public function Listar()
    {
        try {
            $this->db->setQuery("SELECT * FROM actor;");
            return $this->db->getArrayAssocc();
        } catch (PDOException $e) {
            echo 'Error '.$e->getMessage();
        }
    }

    public function Obtener($id)
    {
        try {
            $this->db->setQuery("SELECT * FROM actor WHERE actor_id={$id};");
            return $this->db->getArrayAssocc();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $this->db->setQuery("UPDATE
            actor SET
            first_name='{$data->first_name}',
            last_name='{$data->last_name}',
            last_update=NOW() WHERE actor_id={$data->actor_id};");
            $this->db->alter();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function Registrar($data)
    {
        try {
            $this->db->setQuery("INSERT INTO
            actor (first_name,last_name,last_update)
            VALUES('{$data->first_name}','{$data->last_name}',NOW());");
            $this->db->alter();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try {
            $this->db->setQuery("DELETE FROM actor
            WHERE actor_id = {$id};");
            $this->db->alter();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function __clone()
    {
        $this->original=false;
    }
}
