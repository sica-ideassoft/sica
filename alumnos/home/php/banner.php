<?php
include_once("../../conexion/conexion.php");
$conn = new Conexion();
?>
<script src="js/jquery.js"></script>
<script src="js/slider.js"></script>

<div class="slider-container">
        <ul id="slider" class="slider-wrapper">
            <li class="slide-current">
            <?php
            $sql= "SELECT * FROM banner WHERE id_banner = '1'";
            $query=$conn->query($sql);

            $filas=$query->fetch();

            $ruta = "../../panel/control_admin/publicar/php/";
            $url = $ruta.$filas['imagen'];
             ?>
                <img class="img-banner" src="<?php echo $url; ?>" alt="Slider Imagen 1">
                <div class="caption">
                    <h3 class="caption-title">
                    <?php
                    echo $filas['tema'];
                     ?></h3>
                    <p><?php
                    	echo $filas["anuncio"];
					?></p>
                </div>
            </li>

            <li>
                <?php
                $consulta="SELECT * FROM banner WHERE id_banner = '2'";
                $query = $conn->query($consulta);
                $filas = $query->fetch();

                $ruta = "../../panel/control_admin/publicar/php/";
                $url = $ruta.$filas['imagen'];
                 ?>
                <img class="img-banner" src="<?php echo $url; ?>" alt="Slider Imagen 1">
                <div class="caption">
                <h3 class="caption-title">
                    <?php
                    echo $filas['tema'];
                     ?></h3>
                    <p><?php
                        echo $filas["anuncio"];

                    ?></p>
                </div>
            </li>

            <li>

                <?php
                $sql="SELECT * FROM banner WHERE id_banner = '3'";
                $query =$conn->query($sql);
                $filas = $query->fetch();
                $ruta = "../../panel/control_admin/publicar/php/";
                $url = $ruta.$filas['imagen'];
                 ?>
                <img class="img-banner" src="<?php echo $url;?>" alt="Slider Imagen 1">
                <div class="caption">
                <h3 class="caption-title">
                    <?php
                    echo $filas['tema'];
                     ?></h3>
                    <p><?php
                        echo $filas["anuncio"];

                    ?></p>
                </div>
            </li>

            <li>

                <?php
                $sql="SELECT * FROM banner WHERE id_banner = '4'";
                $query = $conn->query($sql);
                $filas= $query->fetch();
                $ruta = "../../panel/control_admin/publicar/php/";
                $url = $ruta.$filas['imagen'];
                 ?>
                <img class="img-banner" src="<?php echo $url; ?>" alt="Slider Imagen 1">
                <div class="caption">
                <h3 class="caption-title">
                <?php
                    echo $filas['tema'];
                     ?></h3>
                    <p><?php
                        echo $filas["anuncio"];

                    ?></p>
                </div>
            </li>
        </ul>
        </div>

<?php ?>