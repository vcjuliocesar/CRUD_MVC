<?php
namespace App\controllers;

use App\models\Actor_model;

class ActorController
{
    private $model;

    public function __construct()
    {
        $this->model = new Actor_model();
    }

    public function Index()
    {
        $datos = $this->model->Listar();
        return $datos;
    }

    public function Agregar()
    {
        if ($_POST) {
            $this->Guardar();
        }
    }

    public function Editar($id)
    {
        if (!$_POST) {
            $datos = $this->model->Obtener($id);
            return $datos;
        } else {
            $this->Guardar();
        }
    }

    private function Guardar()
    {
        $actor = clone($this->model);
        $actor->actor_id = $_POST['actor_id'];
        $actor->first_name = $_POST['first_name'];
        $actor->last_name = $_POST['last_name'];
        $actor->actor_id > 0 ? $this->model->Actualizar($actor) : $this->model->Registrar($actor);
        header('Location:'.BASE_URL.'public/');
    }

    public function Eliminar($id)
    {
        $this->model->Eliminar($id);
        header('Location:'.BASE_URL.'public/');
    }
}
