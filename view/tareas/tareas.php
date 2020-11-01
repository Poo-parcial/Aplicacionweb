        <h1 class="page-header">Lista de tareas </h1>


            <a class="btn btn-primary pull-right" href="?c=tareas&a=Crud">Agregar</a>
        <br><br><br>
        <div>
        <a class="btn btn-primary pull-right"  id="">Print</a>
        <table  class="table  table-striped  table-hover"  class="display" style="width:100%">
            <thead>
                <tr>
                <th style="width:120px; background-color: #5DACCD; color:#fff">Id_tareas</th>
                    <th style="width:180px; background-color: #5DACCD; color:#fff">Titulo</th>
                    <th style=" background-color: #5DACCD; color:#fff">Descripción</th>
                    <th style=" background-color: #5DACCD; color:#fff">Fecha registro</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($this->model->Listar() as $r): ?>
                <tr>
                 <td><?php echo $r->id_tareas; ?></td>
                    <td><?php echo $r->titulo; ?></td>
                    <td><?php echo $r->descripcion; ?></td>
                    <td><?php echo $r->fecha_registro; ?></td>
                    <td>
                        <a  class="btn btn-warning" href="?c=tareas&a=Crud&id_tareas=<?php echo $r->id_tareas; ?>">Editar</a>
                    </td>
                    <td>
                        <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=tareas&a=Eliminar&id_tareas=<?php echo $r->id_tareas; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </body>

    <script  src="assets/js/datatable.js">
    </script>
    <script>
    $(document).ready(function() {
        $('#print').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'display'
            ]
        } );
    } );
    </script>
</html>
