<?php
include "controlador/controladorSala.php";
include "plantilla.php";
?>
<div class="p-5">
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-body bg-info">
                <?php echo (isset($alert)) ? $alert : ''; ?>
                <form action="" method="post" autocomplete="off" id="formulario">
                <input type="hidden" name="id" id="id">    
                <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="nombre" class="text-dark font-weight-bold">Nombre</label>
                                <input type="text" placeholder="Ingrese Nombre" name="nombre" id="nombre" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="mesas" class="text-dark font-weight-bold">Mesas</label>
                                <input type="number" placeholder="Mesas" name="mesas" id="mesas" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5 text-center">
                            <label for="">Acciones</label> <br>
                            <input type="submit" value="Registrar" class="btn btn-primary" id="btnAccion">
                            <input type="button" value="Nuevo" class="btn btn-success" id="btnNuevo" onclick="limpiar()">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="tbl">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Mesas</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "modelo/conexion.php";
                            include "controlador/controladoreliminarsala.php";

                            $query = mysqli_query($conexion, "SELECT * FROM salas WHERE estado = 1");
                            $result = mysqli_num_rows($query);
                            if ($result > 0) {
                                while ($data = mysqli_fetch_assoc($query)) { ?>
                                    <tr>
                                        <td><?php echo $data["id"]; ?></td>
                                        <td><?php echo $data["nombre"]; ?></td>
                                        <td><?php echo $data["mesas"]; ?></td>
                                        <td>
                                        <!--<a href= "modificar.php?id=<?= $datos->id_mesa?>" class="btn btn-small btn-primary"><i class="fa-solid fa-pen-to-square fa-flip"></i></a>-->
                                         <a href="sala.php?id=<?= $data['id']?>"class="btn btn-small btn-warning"><i class="fa-solid fa-trash fa-shake"></i></a>
                                        </form>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>