<?php
include_once("../conectar.php");
$conn = new DB();
$conn->conectar();




$consulta=mysql_query("SELECT * FROM banner ");
$filas=mysql_fetch_array($consulta);
	// $url = "../../control/perfil/";
	// $imagen=$filas['imagen'];

	// $dir = $url.$imagen;


?>
<script src="js/jquery.js"></script>
<script src="js/slider.js"></script>

<div class="slider-container">
        <ul id="slider" class="slider-wrapper">
            <li class="slide-current">
                <img src="image/1.jpg" alt="Slider Imagen 1">
                <div class="caption">
                    <h3 class="caption-title">Diseño web</h3>
                    <p><?php

                    	echo $filas["id_banner"];
                    	echo $filas["anuncio"];

					?></p>
                </div>
            </li>

            <li>

                <img src="image/2.jpg" alt="Slider Imagen 1">
                <div class="caption">
                    <h3 class="caption-title">Desarrollo web</h3>
                      <p><?php

                    echo $filas["id_banner"];
                    $contador++;
                     ?></p>
                </div>
            </li>

            <li>
                <img src="image/3.jpg" alt="Slider Imagen 1">
                <div class="caption">
                    <h3 class="caption-title">Javascript</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
                </div>
            </li>

            <li>
                <img src="image/4.jpg" alt="Slider Imagen 1">
                <div class="caption">
                    <h3 class="caption-title">Maquetacion</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
                </div>
            </li>
        </ul>
        </div>

<?php ?>