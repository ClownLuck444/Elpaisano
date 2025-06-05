<?php
include "plantilla.php"
?>
<div class="p-5">
<div class="card bg-secondary">
    <div class="card-header text-center bg-light">
        Salas
    </div>
    <div class="card-body ">
        <div class="row">
            <?php
            include "modelo/conexion.php";
            $query = mysqli_query($conexion, "SELECT * FROM salas WHERE estado = 1");
            $result = mysqli_num_rows($query);
            if ($result > 0) {
                while ($data = mysqli_fetch_assoc($query)) { ?>
                    <div class="col-md-3 shadow-lg">
                        <div class="col-12">
                            <img src="img/sala.jpg" height="250" width="330">
                        </div>
                                <!----SEPARADOR------>
                        <h6 class="my-3 text-center text-dark" span class="badge badge-info"><?php echo $data['nombre'];?></span></h6>
                        <div class="d-grid gap-2 col-15 mx-auto" >
                            <a class="btn btn-primary btn-block btn-flat" href="mesas.php?id_sala=<?php echo $data['id']; ?>&mesas=<?php echo $data['mesas']; ?>">
                                <i class="far fa-eye mr-2"></i>
                                Mesas
                            </a>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
  </div>
</div>
