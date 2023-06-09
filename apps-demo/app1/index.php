<?php include 'includes/_header.php'; ?>
<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: https://csn-login.4ks.online");
}

?>
<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Zero Trust Access</title>

        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../estilos.css">
        <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">            
    </head>    
    <body>
      
        <div class="container-login">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        
                      <h1 class="display-4 text-center">Inicio de Sesión Exitoso </h1>
                      <h2 class="text-center">Usuario: <span class="badge badge-primary"><?php echo $_SESSION["s_usuario"];?></span></h2>    
                      <p class="lead text-center">Por Favor Espera Estamos Validando Tus Rutas De Acceso.</p>
                      <div class="container text-center" data-behavior="example">
                        <div class="row">
                            <img src="/images/jpg/site.jpg" alt="" class="col-xs-6 col-xs-push-3">
                        </div>

                        <h1>csn aplicacion demo1</h1>
                        <h2>Esta aplicacion corro dentro de un pod independiente</h2>
                    </div>

                      <hr class="my-4">          
                      <a class="btn btn-danger btn-lg" href="../bd/logout.php" role="button">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>        
     <script src="../jquery/jquery-3.3.1.min.js"></script>    
     <script src="../bootstrap/js/bootstrap.min.js"></script>    
     <script src="../popper/popper.min.js"></script>    
        
     <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="../codigo.js"></script>    
    </body>
</html>
<?php include 'includes/_footer.php'; ?>