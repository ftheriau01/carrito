<?php
    $productos = array(
        "1" => array("nombre" => "Camiseta", "precio" => 15.99),
        "2" => array("nombre" => "Pantalón", "precio" => 25.99),
        "3" => array("nombre" => "Zapatos", "precio" => 35.99),
        "4" => array("nombre" => "Gorra", "precio" => 10.99),
        "5" => array("nombre" => "Reloj", "precio" => 20.99),
        "6" => array("nombre" => "Mochila", "precio" => 30.99),
        "7" => array("nombre" => "Libro", "precio" => 12.99),
        "8" => array("nombre" => "Lápiz", "precio" => 0.99),
        "9" => array("nombre" => "Cuaderno", "precio" => 2.99),
        "10" => array("nombre" => "Calculadora", "precio" => 15.99)
    );

    if (isset($_SESSION["carrito"])) {
        $carrito = $_SESSION["carrito"];
    } else {
        $carrito = array();
    }

    if (isset($_POST["producto"])) {
        $id = $_POST["producto"];
        if (isset($productos[$id])) {
            $carrito[] = $productos[$id];
            $_SESSION["carrito"] = $carrito;
            echo json_encode(array("nombre"=>$productos[$id]["nombre"], "precio"=>$productos[$id]["precio"]));
            exit();
        }
    }

    if (isset($_POST["finalizar"])) {
        $carrito = $_SESSION["carrito"];
        $total = 0;
        foreach ($carrito as $producto) {
            $total += $producto["precio"];
        }
        echo "<p class='fst-italic fw-bolder mx-3 fs-3 text-success'>Gracias por su compra. El total es: ₡" . number_format($total, 2) . "</p>";

        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];

        $datosUsuario = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\n\n";

        $archivo = "datos_compra.txt";

        file_put_contents($archivo, $datosUsuario, FILE_APPEND);
 
        $carrito = array();
        $_SESSION["carrito"] = $carrito;
    }

?>