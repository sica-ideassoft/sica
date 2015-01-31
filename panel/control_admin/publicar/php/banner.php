<?php
include_once("../conectar.php");
$conn = new DB();
$conn->conectar();


?>
<script src="js/jquery.js"></script>
<script src="js/slider.js"></script>

<div class="slider-container">
        <ul id="slider" class="slider-wrapper">
            <li class="slide-current">

                <?php
                $consulta=mysql_query("SELECT * FROM banner where id_banner='1'");
                $filas=mysql_fetch_array($consulta);
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
                $consulta=mysql_query("SELECT * FROM banner where id_banner='2'");
                $filas=mysql_fetch_array($consulta);
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
                $consulta=mysql_query("SELECT * FROM banner where id_banner='3'");
                $filas=mysql_fetch_array($consulta);
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
                $consulta=mysql_query("SELECT * FROM banner where id_banner='4'");
                $filas=mysql_fetch_array($consulta);
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