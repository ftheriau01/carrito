<?php
    // Iniciar la sesión
    session_start();

    include "./carrito.php";  
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <!-- personalizado -->
    <link rel="stylesheet" href="./css/app.css">
    <title>Tarea 1 (AJAX)</title>
  </head>
  <body>
  <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container-fluid">
                <a class="navbar-brand text-white fw-bolder" href="#">Tarea 1 (Ajax)</a>
            </div>
        </nav>
    </div>  
    <div class="container my-3">
        <div class="row">
            <div clas="col-md-12">
                <div clas="card">
                    <div class="card card-header">
                        <h1 class="fw-bolder text-primary my-2 text-center">Productos disponibles</h1>
                    </div>
                </div>    
            </div> 
        </div>            
        <div class="row">            
            <div class="col-md-12">
                <div class="card card-body">
                        <div class="row"> 
                            <?php
                            function mostrarProducto($id, $producto) {
                             echo "
                             <div class='row'> 
                                <div class='col-md-3'>
                                    <div class='card my-3' style='width: 20rem;'>
                                        <img src='".$producto["img"]."' class='card-img-top' alt=''>
                                        <div class='card-body>
                                            <h5 class='card-title'>" . $producto["nombre"] . "</h5>
                                            <p class='card-text'>" . $producto["precio"] . "</p>
                                            <button class='btn btn-success btn-sm' onclick='agregarProducto($id)'>Agregar al carrito</button>
                                        </div>
                                    </div>   
                                </div>  
                            </div> 
                            ";}
                            ?>
                        </div>  
                            <ul id="carrito">
                                <?php
                                    // Mostrar los productos en el carrito con su nombre y precio
                                    foreach ($productos as $id => $producto) {
                                        mostrarProducto($id, $producto);
                                      }
                                      
                                ?> 
                                 <h1 class="fw-bolder my-2 text-primary mx-auto">Productos en el carrito</h1>
                            </ul>
                            
                            <div class="row my-3">
                                <form class="form" method="post">
                                    <div class="col-md-10 mb-3">
                                        <label class="form-label fst-italic fw-bolder" for="nombre">Nombre:</label>
                                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Jose Ramirez Lopez" required pattern="[A-Za-z\s]+">
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <label class="form-label fst-italic fw-bolder" for="correo">Correo:</label>
                                        <input class="form-control" type="email" name="correo" id="correo" placeholder="correo@email.com" required>
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <label class="form-label fst-italic fw-bolder" for="telefono">Teléfono:</label>
                                        <input class="form-control" type="tel" name="telefono" id="telefono" placeholder="1234-5678" required pattern="[0-9]{4}-[0-9]{4}">
                                    </div>
                                    <input class="btn btn-warning fw-bolder" type="submit" name="finalizar" value="Finalizar compra">
                                </form>
                            </div>
                        </ul>
                    </div>
            </div> 
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <script src="./js/app.js"></script> 
</html>
