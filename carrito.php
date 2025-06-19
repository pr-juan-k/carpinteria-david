<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Carrito / Pro Muebles</title>
  <meta content="Carpintería profesional especializada en diseños únicos y calidad artesanal. Descubre muebles personalizados y soluciones innovadoras para tu espacio." name="description">
  <meta content="carpintería, muebles a medida, diseño de muebles, carpintería profesional, muebles personalizados, muebles de madera, carpintería artesanal, diseño de interiores, fabricación de muebles, taller de carpintería" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/carpint/favicon.jpg" rel="icon">
  <link href="assets/img/carpint/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #000;
      color: #fff;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .titulo {
      font-size: 24px;
      font-weight: bold;
    }

    .busqueda {
      display: flex;
      align-items: center;
    }

    .busqueda input[type="text"] {
      padding: 5px 10px;
      border: none;
      border-radius: 4px;
    }

    .busqueda button {
      margin-left: 5px;
      padding: 5px 10px;
      border: none;
      background-color: #444;
      color: white;
      border-radius: 4px;
      cursor: pointer;
    }

    .busqueda button:hover {
      background-color: #666;
    }
  </style>

<body class="index-page">

  <!-- Menú lateral -->
  

  <header id="header" class="header dark-background d-flex flex-column"> 
    
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="assets/img/carpint/logo1-1.png" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="index.php" class="logo d-flex align-items-center justify-content-center">
      
      <h4>Pro Muebles</h4>
    </a>

    <div class="social-links text-center">
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="https://wa.me/5493815178282" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="index.php"><i class="bi bi-house-door navicon"></i> Inicio</a></li>
        <li><a href="index.php"><i class="bi bi-box-seam navicon"></i> Productos</a></li>
        
        
        <li><a href="index.php"><i class="bi bi-people navicon"></i> Sobre nosotros</a></li>
        <li><a href="carrito.php"><i class="bi bi-cart navicon"></i> Carrito</a></li>
        <li><a href="index.php"><i class="bi bi-chat-left-quote navicon"></i> Testimonios</a></li>
        <li><a href="index.php"><i class="bi bi-pencil-square navicon"></i> Déjanos un comentario</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

  
    <!-- carrito -->

    <section id="carrito" class="section bg-light py-5">
        <div class="container" data-aos="fade-up">

            <div class="section-title text-center mb-5">
                <h2 style="background-color: #978585">Tu Carrito</h2>
                <p>Revisá los productos que agregaste antes de finalizar tu compra.</p>
            </div>

            <div class="table-responsive">
                <table class="table align-middle table-bordered text-center bg-white shadow-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>Producto</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody id="items-carrito">
                        </tbody>
                </table>
            </div>

            <div class="row justify-content-end mt-4">
              <div class="col-md-4 text-end">
              <h4 class="mb-3">Total: <strong id="total-carrito">$0</strong></h4>
               <a href="compra.php" class="btn btn-dark rounded-pill px-4 py-2">Proceder a la compra</a>
            </div>
</div>

        </div>



    </section>

    <!-- carrito -->


          <!-- Scryp -->
          <script>
            // Función para cambiar la imagen principal del producto (solo relevante en productos.php)
            function cambiarImagen(nuevaImagenSrc, clickedButton = null) {
                const productoImagen = document.getElementById('producto-imagen');
                if (productoImagen) {
                    productoImagen.src = nuevaImagenSrc;
                    // Opcional: Para cambiar el estilo del botón activo
                    // const buttons = document.querySelectorAll('.color-selector');
                    // buttons.forEach(btn => btn.classList.remove('active-color-selector'));
                    // if (clickedButton) {
                    //     clickedButton.classList.add('active-color-selector');
                    // }
                }
            }

            // --- FUNCIONES DEL CARRITO (USANDO sessionStorage) ---

            // Agrega un producto al carrito
            function agregarAlCarrito(button) {
                const productId = button.dataset.productId;
                const productName = button.dataset.productName;
                const productPrice = parseFloat(button.dataset.productPrice);
                const productImage = button.dataset.productImage; // Esta ruta ya es absoluta desde PHP

                let carrito = JSON.parse(sessionStorage.getItem('carrito')) || [];

                const productoExistente = carrito.find(item => item.id === productId);

                if (productoExistente) {
                    productoExistente.cantidad++;
                } else {
                    carrito.push({
                        id: productId,
                        nombre: productName,
                        precio: productPrice,
                        imagen: productImage, // La ruta de la imagen ya es absoluta
                        cantidad: 1
                    });
                }

                sessionStorage.setItem('carrito', JSON.stringify(carrito));
                
                actualizarContadorCarrito(); // Actualiza el número en el botón flotante
                alert(`"${productName}" ha sido agregado al carrito.`); // Mensaje de confirmación
                // No redirigimos aquí. El usuario decide ir al carrito haciendo clic en el botón flotante.
            }

            // Actualiza el contador numérico del carrito flotante
            function actualizarContadorCarrito() {
                const contadorCarrito = document.getElementById('contador-carrito');
                if (contadorCarrito) {
                    let carrito = JSON.parse(sessionStorage.getItem('carrito')) || [];
                    let totalItems = carrito.reduce((sum, item) => sum + item.cantidad, 0);
                    contadorCarrito.textContent = totalItems;
                    // Muestra u oculta la burbuja del contador
                    contadorCarrito.style.display = totalItems > 0 ? 'inline-block' : 'none';
                }
            }

            // Renderiza los productos en la tabla del carrito (solo relevante en carrito.php)
            function renderizarCarrito() {
                const itemsCarritoBody = document.getElementById('items-carrito');
                const totalCarritoElement = document.getElementById('total-carrito');
                let carrito = JSON.parse(sessionStorage.getItem('carrito')) || [];
                let totalGeneral = 0;

                // Asegurarse de que los elementos existen antes de intentar manipularlos
                if (!itemsCarritoBody || !totalCarritoElement) {
                    // Esto significa que no estamos en la página del carrito, o los IDs están mal.
                    // No hacer nada, ya que esta función solo debe ejecutarse en carrito.php.
                    return;
                }

                itemsCarritoBody.innerHTML = ''; // Limpiar el contenido actual de la tabla

                if (carrito.length === 0) {
                    itemsCarritoBody.innerHTML = '<tr><td colspan="6">Tu carrito está vacío.</td></tr>';
                    totalCarritoElement.textContent = '$0';
                    actualizarContadorCarrito(); // Asegurar que el contador también se ponga a 0
                    return;
                }

                carrito.forEach(item => {
                    const subtotal = item.precio * item.cantidad;
                    totalGeneral += subtotal;

                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td><img src="${item.imagen}" alt="${item.nombre}" width="80"></td>
                        <td>${item.nombre}</td>
                        <td>$${item.precio.toLocaleString('es-AR')}</td>
                        <td>
                            <input type="number" class="form-control text-center cantidad-input" 
                                  value="${item.cantidad}" min="1" style="width: 70px;" 
                                  data-product-id="${item.id}">
                        </td>
                        <td>$${subtotal.toLocaleString('es-AR')}</td>
                        <td><button class="btn btn-sm btn-danger eliminar-producto" data-product-id="${item.id}"><i class="bi bi-trash"></i></button></td>
                    `;
                    itemsCarritoBody.appendChild(row);
                });

                totalCarritoElement.textContent = `$${totalGeneral.toLocaleString('es-AR')}`;
                actualizarContadorCarrito();

                // Añadir Event Listeners DESPUÉS de que se hayan creado los elementos
                document.querySelectorAll('.eliminar-producto').forEach(button => {
                    button.addEventListener('click', function() {
                        const productId = this.dataset.productId;
                        eliminarProductoDelCarrito(productId);
                    });
                });

                document.querySelectorAll('.cantidad-input').forEach(input => {
                    input.addEventListener('change', function() {
                        const productId = this.dataset.productId;
                        const newQuantity = parseInt(this.value);
                        if (newQuantity > 0) {
                            actualizarCantidadProducto(productId, newQuantity);
                        } else {
                            // Si la cantidad es 0 o menos, eliminar el producto
                            eliminarProductoDelCarrito(productId);
                        }
                    });
                });
            }

            // Elimina un producto del carrito
            function eliminarProductoDelCarrito(productId) {
                let carrito = JSON.parse(sessionStorage.getItem('carrito')) || [];
                carrito = carrito.filter(item => item.id !== productId);
                sessionStorage.setItem('carrito', JSON.stringify(carrito));
                renderizarCarrito(); // Vuelve a renderizar para actualizar la vista
            }

            // Actualiza la cantidad de un producto en el carrito
            function actualizarCantidadProducto(productId, newQuantity) {
                let carrito = JSON.parse(sessionStorage.getItem('carrito')) || [];
                const producto = carrito.find(item => item.id === productId);
                if (producto) {
                    producto.cantidad = newQuantity;
                    sessionStorage.setItem('carrito', JSON.stringify(carrito));
                    renderizarCarrito(); // Vuelve a renderizar para actualizar la vista y totales
                }
            }

            // Inicializar el carrito y el contador al cargar la página
            document.addEventListener('DOMContentLoaded', () => {
                // Ejecutar renderizarCarrito solo si los elementos de la tabla existen (es decir, estamos en carrito.php)
                if (document.getElementById('items-carrito')) {
                    renderizarCarrito();
                }
                // Siempre actualizar el contador flotante, ya que este elemento puede estar en varias páginas
                actualizarContadorCarrito(); 
            });
          </script>
          <!-- Scryp -->
    

  

  
  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Carpinteria david</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
       
        Designed by <a href="#">Program.JK</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Botón WhatsApp -->
  <a href="https://wa.me/15555555555" target="_blank" id="whatsapp-button" class="whatsapp-button d-flex align-items-center justify-content-center">
<i class="bi bi-whatsapp"></i></a>
  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>