function agregarProducto(id) {
    // Crear un objeto FormData con el id del producto
    let formData = new FormData();
    formData.append("id", id);
  
    // Usar la función fetch para hacer la petición AJAX
    fetch("AccionCarta.php", {
      method: "POST",
      body: formData
    })
      .then((response) => response.text()) // Convertir la respuesta a texto
      .then((data) => {
        // Mostrar la respuesta en el elemento con id "carrito"
        document.getElementById("carrito").innerHTML = data;
        // Mostrar una alerta con SweetAlert2
        Swal.fire({
          icon: "success",
          title: "Producto agregado al carrito",
          showConfirmButton: false,
          timer: 1500,
        });
      })
      .catch((error) => {
        // Mostrar un error en caso de falla
        console.error(error);
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Algo salió mal!",
        });
      });
  }
  
   