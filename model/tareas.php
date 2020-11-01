<?php
	class tareas
	{
		private $pdo;
	    public $id_tareas;
	    public $titulo;
	    public $descripcion;
	    public $fecha_registro;

		public function __CONSTRUCT()
		{
			try
			{
				$this->pdo = Database::StartUp();
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}

		public function Listar()
		{
			try
			{
				$result = array();

				$stm = $this->pdo->prepare("SELECT * FROM tareas");
				$stm->execute();

				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}

		public function Obtener($id_tareas)
		{
			try
			{
				$stm = $this->pdo->prepare("SELECT * FROM tareas WHERE id_tareas = ?");


				$stm->execute(array($id_tareas));
				return $stm->fetch(PDO::FETCH_OBJ);
			} catch (Exception $e)
			{
				die($e->getMessage());
			}
		}

		public function Eliminar($id_tareas)
		{
			try
			{
				$stm = $this->pdo->prepare("DELETE FROM tareas WHERE id_tareas = ?");

				$stm->execute(array($id_tareas));
			} catch (Exception $e)
			{
				die($e->getMessage());
			}
		}

		public function Actualizar($data)
		{
			try
			{
				$sql = "UPDATE tareas SET
							titulo      		    = ?,
							descripcion          = ?,
							fecha_registro        = ?
							where id_tareas =  ?";

				$this->pdo->prepare($sql)
				     ->execute(
					    array(
					    	$data->titulo,
	              $data->descripcion,
	              $data->fecha_registro,
							  $data->id_tareas
						)
					);
			} catch (Exception $e)
			{
				die($e->getMessage());
			}
		}

		public function Registrar(tareas $data)
		{
			try
			{
			$sql = "INSERT INTO tareas (titulo,descripcion,fecha_registro)
			        VALUES (?, ?, ?)";

			$this->pdo->prepare($sql)
			     ->execute(
					array(
						 $data->titulo,
	                    $data->descripcion,
	                    $data->fecha_registro

	                )
				);
			} catch (Exception $e)
			{
				die($e->getMessage());
			}
		}
	}
?>
