<h1 class="page-header">
    <?php echo $tareas->titulo; 'Nuevo Registro' ?>
</h1>
<ol class="breadcrumb">
  <li><a href="?c=tareas">Nueva tarea</a></li>
  <li class="active"><?php echo $tareas->id_tareas; 'Nuevo Registro' ?></li>
</ol>
<?php // Formulario de registro ?>
<form id="" action="?c=tareas&a=Guardar" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label style="display:none;" >Id</label>
      <input  type="hidden" type="text" name="id_tareas" value="<?php echo $tareas->id_tareas; ?>" class="form-control" placeholder="Ingrese el titulo de la tarea" required>
  </div>

    <div class="form-group">
        <label>Titulo</label>
        <input type="text" name="titulo" value="<?php echo $tareas->titulo; ?>" class="form-control" placeholder="Ingrese el titulo de la tarea" required>
    </div>

    <div class="form-group">
        <label>Descripción</label>
        <input  type="textarea" class="form-control" name="descripcion" value="<?php echo $tareas->descripcion; ?>"   placeholder="Ingrese la descripción de su tarea" required></textarea>
    </div>

    <div class="form-group">
        <label>Fecha registro</label>
        <input type="TIMESTAMP" name="fecha_registro"  value="<?php echo $tareas->fecha_registro; ?>" class="form-control" placeholder="Ingrese la fecha de registro" >
    </div>
    <hr />
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>
<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
