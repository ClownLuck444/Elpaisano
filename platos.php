<?php
include "controlador/controladorPlatos.php";
include "plantilla.php";
?>
<div class="p-5">
<div class="card shadow-lg ">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body bg-info">
                            <form action="" method="post" autocomplete="off" id="formulario" enctype="multipart/form-data">
                                <?php echo isset($alert) ? $alert : ''; ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="hidden" id="id" name="id">
                                            <input type="hidden" id="foto_actual" name="foto_actual">
                                            <label for="plato" class=" text-dark font-weight-bold">Plato</label>
                                            <input type="text" placeholder="Ingrese nombre del plato" name="plato" id="plato" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="precio" class=" text-dark font-weight-bold">Precio</label>
                                            <input type="text" placeholder="Ingrese precio" class="form-control" name="precio" id="precio">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="precio" class=" text-dark font-weight-bold">Foto (512px - 512px)</label>
                                            <input type="file" class="form-control" name="foto" id="foto">
                                        </div>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="">Acciones</label> <br>
                                        <input type="submit" value="Registrar" class="btn btn-primary" id="btnAccion">
                                        <input type="button" value="Nuevo" onclick="limpiar()" class="btn btn-success" id="btnNuevo">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="tbl">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Plato</th>
                                        <th>Precio</th>
                                        <th>Imagen</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "modelo/conexion.php";
                                    include "controlador/controladoreliminarplato.php";
                                    $query = mysqli_query($conexion, "SELECT * FROM platos WHERE estado = 1");
                                    $result = mysqli_num_rows($query);
                                    if ($result > 0) {
                                        while ($data = mysqli_fetch_assoc($query)) { ?>
                                            <tr>
                                                <td><?php echo $data['id']; ?></td>
                                                <td><?php echo $data['nombre']; ?></td>
                                                <td><?php echo $data['precio']; ?></td>
                                                <td><img class="img-thumbnail" src="<?php echo ($data['imagen'] == null) ? 'img/aji.png' : $data['imagen']; ?>" alt="" width="100"></td>
                                                <td>
                                                    <a href="#" onclick="editarPlato(<?php echo $data['id']; ?>)" class="btn btn-primary"><i class='fas fa-edit'></i></a>
                                                   <form action="platos.php?id=<?= $data['id']?>"method="post" class="confirmar d-inline">
                                                    <button class=" confirmar d-inline btn btn-small btn-warning"><i class="fa-solid fa-trash fa-shake"></i></button>
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
    </div>