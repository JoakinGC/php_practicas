<?php
    include("../includes/validarLogin.php");
    $_SESSION["id"] = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>MODIFCAR GENEROS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div class="content">
     <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4"></h6>
                            <form action="../includes/modificar_producto.php" method="post">
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="nombre" name="nombre" value="<?= $_GET["nombre"]?>">
                                    
                                    
                                </div>                            
                                    <label for="exampleInputEmail1" class="form-label">categoria:</label>
                                <?php
                                require("db_conect.php");
                                
                                $sql = "select * from categoria";
                                $result = $con->query($sql);
                                
                                
                                if($result->num_rows > 0){
                                    ?>
                                <div class="mb-2">
                                    <select name="categoria" class="form-select">
                                    <?php
                                         if($_GET["idCat"]==-1){
            
                                        }else{
                                            include_once("../includes/cuerpo_genero.php");
                                        }
                                        while($fila = $result->fetch_assoc()){

                                            if($fila["nombre_generos"] == $_GET["nombreGenero"]){

                                        }else{
                                            include("../includes/cuerpo_Compra_genero.php");
                                        }
                   
                         
                
                                        }?>
                                   </select>
                                <?php
                            }else{
                
                            }

                            ?>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Precio:</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="nombre" name="precio" value="<?= $_GET["precio"]?>">
                                    
                                    
                                </div>
                                <input type="submit" class="btn btn-primary m-2" value="Enviar">
                                <p class="btn btn-secondary m-2"><a href="productos.php">Volver</a></p>
                            </form>
                        </div>
                    </div>
                </div>
     </div>


    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>