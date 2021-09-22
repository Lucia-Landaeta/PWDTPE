<?php
$Titulo = "Resultado ej 2";
include_once("../../vista/estructura/header.php");
include_once("../../control/tepe3.php");
$obj = new controltp3();
$arrArchivo = $obj->ej2($_FILES);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card border p-1 rounded shadow fw-bold ">
                <h3><?php echo $arrArchivo['name'];?></h3>
                <textarea name="" id="" cols="30" rows="10">
                    <?php
                        if($arrArchivo['link'] != ""){
                            echo $arrArchivo['content'];
                        }else{
                            echo $arrArchivo['error'];
                        }
                    ?>
                </textarea>
                <a href="EjercicioDos.php">
                    <button type="button" class="btn btn-outline-primary mt-3">Volver</button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../../vista/estructura/footer.php");
?>