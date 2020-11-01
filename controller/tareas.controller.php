<?php
require_once 'model/tareas.php';

class tareasController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new tareas();
    }

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/tareas/tareas.php';

    }

    public function Crud(){
        $tareas = new tareas();

        if(isset($_REQUEST['id_tareas'])){
            $tareas = $this->model->Obtener($_REQUEST['id_tareas']);
        }

        require_once 'view/header.php';
        require_once 'view/tareas/tareas-editar.php';

    }

    public function Guardar(){
        $tareas = new tareas();
        $tareas->id_tareas = $_REQUEST['id_tareas'];
        $tareas->titulo = $_REQUEST['titulo'];
        $tareas->descripcion = $_REQUEST['descripcion'];
        $tareas->fecha_registro = $_REQUEST['fecha_registro'];

        if ($tareas->id_tareas  > 0) {
           $this->model->Actualizar($tareas);
        }
        else {
           $this->model->Registrar($tareas);
        }



        header('Location: index.php');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_tareas']);
        header('Location: index.php');
    }
}
