<?php
include_once("../../../conexion/conexion.php");
$conn = new Conexion();
?>
<script src="js/jquery.js"></script>
<script src="js/slider.js"></script>

<div class="slider-container">
        <ul id="slider" class="slider-wrapper">
            <li class="slide-current">

                <?php
                $banner = 1;
                $consulta=$conn->prepare("SELECT * FROM banner where id_banner=:banner");
                $consulta->bindParam(':banner',$banner);
                $consulta->execute();
                $filas=$consulta->fetch();
                $ruta = "php/";
                    ?>
                <img src="<?php echo $ruta.$filas['imagen']; ?>" alt="Slider Imagen 1">

                <div class="caption">
                    <h3 class="caption-title">
                       <?php echo utf8_encode($filas['tema']);?>
                    </h3>
                    <p><?php echo utf8_encode($filas['anuncio']);?></p>
                </div>
            </li>

            <li>

                <?php
                $banner = 2;
                $consulta=$conn->prepare("SELECT * FROM banner where id_banner=:banner");
                $consulta->bindParam(':banner',$banner);
                $consulta->execute();
                $filas=$consulta->fetch();
                $ruta = "php/";
                    ?>
                <img src="<?php echo $ruta.$filas['imagen']; ?>" alt="Slider Imagen 1">

                <div class="caption">
                    <h3 class="caption-title">
                       <?php echo $filas['tema'];?>
                    </h3>
                    <p><?php echo $filas['anuncio'];?></p>
                </div>

            </li>

            <li>
                <?php
                $banner = 3;
                $consulta= $conn->prepare("SELECT * FROM banner where id_banner=:banner");
                $consulta->bindParam(':banner',$banner);
                $consulta->execute();
                $filas=$consulta->fetch();
                $ruta = "php/";
                    ?>
                <img src="<?php echo $ruta.$filas['imagen']; ?>" alt="Slider Imagen 1">

                <div class="caption">
                    <h3 class="caption-title">
                       <?php echo utf8_encode($filas['tema']);?>
                    </h3>
                    <p><?php echo utf8_encode($filas['anuncio']);?></p>
                </div>
            </li>

            <li>
                <?php
                $banner = 4;
                $consulta=$conn->prepare("SELECT * FROM banner where id_banner=:banner");
                $consulta->bindParam(':banner',$banner);
                $consulta->execute();
                $filas=$consulta->fetch();
                $ruta = "php/";
                    ?>
                <img src="<?php echo $ruta.$filas['imagen']; ?>" alt="Slider Imagen 1">

                <div class="caption">
                    <h3 class="caption-title">
                       <?php echo utf8_encode($filas['tema']);?>
                    </h3>
                    <p><?php echo utf8_encode($filas['anuncio']);?></p>
                </div>
            </li>
        </ul>
        </div>

<?php ?>