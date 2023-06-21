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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.12/sweetalert2.min.js" integrity="sha512-JbRQ4jMeFl9Iem8w6WYJDcWQYNCEHP/LpOA11LaqnbJgDV6Y8oNB9Fx5Ekc5O37SwhgnNJdmnasdwiEdvMjW2Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <div clas="col-md-10">
                <div clas="card">
                    <div class="card card-header">
                        <h1 class="fw-bolder text-primary my-2 text-center">Productos disponibles</h1>
                    </div>
                    <div class="card card-body">
                        <ul class="list-group mx-5">
                            <?php
                                // Mostrar los productos disponibles con un botón para agregarlos al carrito
                                function mostrarProducto($id, $producto) {
                                    echo "<li class='my-2 fst-italic fw-bold'>" . $producto["nombre"] . ": ₡" . number_format($producto["precio"], 2) . 
                                      " <button class='btn btn-success btn-sm' onclick='agregarProducto($id)'>Agregar al carrito</button></li>";
                                  }  
                            ?>
                           
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
                                        <input class="form-control" type="email" name="correo" id="correo" placeholder="sun correo@email.com" required>
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
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <script src="./js/app.js"></script> 
</html>
