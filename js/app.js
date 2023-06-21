function agregarProducto(id) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./index.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var respuesta = JSON.parse(this.responseText);
            Swal.fire("Se ha agregado al carrito el producto " + respuesta.nombre + " con un precio de ₡" + respuesta.precio);
            var lista = document.querySelector("#carrito");
            var li = document.createElement("li");
            li.className = "my-2 fst-italic fw-bold";
            li.textContent = respuesta.nombre + ": ₡" + respuesta.precio;
            lista.appendChild(li);
        }
   };
    xhr.send("producto=" + id);
  }

