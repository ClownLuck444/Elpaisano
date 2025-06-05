<?php
include "controlador/controladorUsuario.php";
include "plantilla.php";
?>
<div class="card">
    <div class="card-body">
        <form action="" method="post" autocomplete="off" id="formulario">
            <?php echo isset($alert) ? $alert : ''; ?>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" placeholder="Ingrese Nombre" name="nombre" id="nombre">
                        <input type="hidden" id="id" name="id">
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="correo" class="form-control" placeholder="Ingrese correo Electrónico" name="correo" id="correo">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="rol">Rol</label>
                        <select id="rol" class="form-control" name="rol">
                            <option>Seleccionar</option>
                            <option value="1">Administrador</option>
                            <option value="2">Cocinero</option>
                            <option value="3">Mozo</option>
                        </select>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input type="password" class="form-control" placeholder="Ingrese Contraseña" name="pass" id="pass">
                    </div>
                </div>
            </div>
            <input type="submit" value="Registrar" class="btn btn-primary" id="btnAccion">
            <input type="button" value="Nuevo" class="btn btn-success" id="btnNuevo" onclick="limpiar()">
        </form>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered mt-2" id="tbl">
        <thead class="thead-dark ">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
             include "modelo/conexion.php";
             include "controlador/controladorEliminarUsuario.php";
            $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE estado = 1");
            $result = mysqli_num_rows($query);
            if ($result > 0) {
                while ($data = mysqli_fetch_assoc($query)) {
                    if ($data['rol'] == 1) {
                        $rol = '<span class="badge badge-success bg-dark">Administrador</span>';
                    }else if($data['rol'] == 2){
                        $rol = '<span class="badge badge-info bg-success">Cocinero</span>';
                    }else{
                        $rol = '<span class="badge badge-warning bg-primary">Mozo</span>';
                    }
                    ?>
                    <tr>   
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['nombre']; ?></td>
                        <td><?php echo $data['correo']; ?></td>
                        <td><?php echo $rol; ?></td>
                        <td>
                            <a href="#" onclick="editarUsuario(<?php echo $data['id']; ?>)" class="btn btn-success"><i class='fas fa-edit'></i></a>
                            <form action="usuarios.php?id=<?= $data['id']?>"method="post" class="confirmar d-inline">
                            <button class=" btn btn-small btn-warning"><i class="fa-solid fa-trash fa-shake"></i></button>
                            </form>
                        </td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</div>