<?php
$Titulo = "Resultado ej 1";
include_once("../../vista/estructura/header.php");
include_once("../../control/tepe3.php");
$obj = new controltp3();
$arrArchivo = $obj->ej1($_FILES);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card border p-5 rounded shadow fw-bold ">
                <?php
                    if ($arrArchivo['link'] == "") {
                        echo $arrArchivo['error'];
                    } else {
                        echo "ARCHIVO <br/>";
                        echo "<a href=" . $arrArchivo['link'] . ">" . $arrArchivo['name'] . "</a>";
                    }
                ?>
                <a href="EjercicioUno.php">
                    <button type="button" class="btn btn-outline-primary mt-3">Volver</button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../../vista/estructura/footer.php");
?>