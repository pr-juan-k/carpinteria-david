
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Productos / Pro Muebles</title>
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
        <li><a href="#productos"><i class="bi bi-box-seam navicon"></i> Productos</a></li>
       
        
        <li><a href="index.php"><i class="bi bi-people navicon"></i> Sobre nosotros</a></li>
        <li><a href="index.php"><i class="bi bi-cart navicon"></i> Carrito</a></li>
        <li><a href="index.php"><i class="bi bi-chat-left-quote navicon"></i> Testimonios</a></li>
        <li><a href="index.php"><i class="bi bi-pencil-square navicon"></i> Déjanos un comentario</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- section de producto destacado -->
    
        <?php
              // Lógica PHP para cargar el producto, que ya tienes
              $ruta_txt = 'user/cargarP/txt/juegos.txt'; // Ajusta esta ruta según la ubicación de productos.php
              $ruta_portadas = 'user/cargarP/portadas/'; // Ajusta esta ruta según la ubicación de productos.php

              $producto_seleccionado = null;
              $error_producto = '';

              // Verificar si se recibió un ID de producto por URL (GET)
              if (isset($_GET['id']) && !empty($_GET['id'])) {
                  $id_producto_url = htmlspecialchars($_GET['id']);

                  if (file_exists($ruta_txt) && is_readable($ruta_txt)) {
                      $lineas = file($ruta_txt, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                      foreach ($lineas as $linea) {
                          $datos = explode(';', $linea);
                          // Asegurarse de que la línea tiene suficientes datos y el ID coincide
                          if (count($datos) >= 8 && $datos[0] === $id_producto_url) {
                              $producto_seleccionado = [
                                  'id' => $datos[0],
                                  'titulo' => htmlspecialchars($datos[1]),
                                  'descripcion' => htmlspecialchars($datos[2]),
                                  'categoria' => htmlspecialchars($datos[3]),
                                  'precio' => htmlspecialchars($datos[4]),
                                  'foto1' => htmlspecialchars($datos[5]),
                                  'foto2' => htmlspecialchars($datos[6]),
                                  'foto3' => htmlspecialchars($datos[7])
                              ];
                              break; // Producto encontrado, salimos del bucle
                          }
                      }
                  } else {
                      $error_producto = 'El archivo de productos no existe o no se pudo leer.';
                  }

                  if ($producto_seleccionado === null && empty($error_producto)) {
                      $error_producto = 'El producto solicitado no fue encontrado.';
                  }

              } else {
                  $error_producto = 'No se ha especificado un producto para mostrar.';
              }

        ?>
      <section id="producto-destacado" class="section py-5" style="background-color: #f5f5f5; position: relative;">
          <div class="container">
              <?php if (!empty($error_producto)): ?>
                  <div class="alert alert-danger text-center" role="alert">
                      <?php echo $error_producto; ?>
                      <br><a href="index.php" class="btn btn-primary mt-2">Volver a la página principal</a>
                  </div>
              <?php else: // Si se encontró el producto, mostramos sus detalles ?>
                  <div class="row justify-content-center align-items-center">
                      <div class="col-lg-6 col-md-8 mb-4 text-center">
                          <img id="producto-imagen" 
                              src="<?php echo $ruta_portadas . $producto_seleccionado['foto1']; ?>" 
                              class="img-fluid rounded shadow-sm" 
                              alt="<?php echo $producto_seleccionado['titulo']; ?>">

                          <div class="d-flex justify-content-center gap-3 mt-3 flex-wrap">
                              <?php if (!empty($producto_seleccionado['foto1'])): ?>
                                  <button class="color-selector btn rounded-circle border" 
                                          style="background-color: #ccc; width: 50px; height: 50px; box-shadow: 0 4px 15px rgba(0,0,0,0.4); transition: transform 0.3s;" 
                                          onclick="cambiarImagen('<?php echo $ruta_portadas . $producto_seleccionado['foto1']; ?>', this)">
                                  </button>
                              <?php endif; ?>

                              <?php if (!empty($producto_seleccionado['foto2'])): ?>
                                  <button class="color-selector btn rounded-circle border" 
                                          style="background-color: #999; width: 50px; height: 50px; box-shadow: 0 4px 15px rgba(0,0,0,0.4); transition: transform 0.3s;" 
                                          onclick="cambiarImagen('<?php echo $ruta_portadas . $producto_seleccionado['foto2']; ?>', this)">
                                  </button>
                              <?php endif; ?>

                              <?php if (!empty($producto_seleccionado['foto3'])): ?>
                                  <button class="color-selector btn rounded-circle border" 
                                          style="background-color: #666; width: 50px; height: 50px; box-shadow: 0 4px 15px rgba(0,0,0,0.4); transition: transform 0.3s;" 
                                          onclick="cambiarImagen('<?php echo $ruta_portadas . $producto_seleccionado['foto3']; ?>', this)">
                                  </button>
                              <?php endif; ?>
                          </div>
                      </div>

                      <div class="col-lg-6 col-md-10 text-center text-lg-start">
                          <h2 class="mb-3"><?php echo $producto_seleccionado['titulo']; ?></h2>
                          <p>
                              <?php echo $producto_seleccionado['descripcion']; ?>
                          </p>
                          <h4 class="text-success mb-3">$<?php echo number_format($producto_seleccionado['precio'], 0, ',', '.'); ?></h4>
                          <button class="btn btn-dark rounded-pill px-4 py-2" id="boton-agregar-carrito" 
                                  data-product-id="<?php echo $producto_seleccionado['id']; ?>"
                                  data-product-name="<?php echo htmlspecialchars($producto_seleccionado['titulo']); ?>"
                                  data-product-price="<?php echo htmlspecialchars($producto_seleccionado['precio']); ?>"
                                  data-product-image="<?php echo htmlspecialchars($ruta_portadas . $producto_seleccionado['foto1']); ?>"
                                  onclick="agregarAlCarrito(this)">
                              <i class="bi bi-cart-plus me-2"></i> Agregar al carrito
                          </button>
                      </div>
                  </div>
              <?php endif; ?>
          </div>

          <a href="carrito.php" id="carrito-flotante" class="btn btn-dark rounded-circle position-fixed" style="bottom: 20px; right: 20px; z-index: 1000;">
              <i class="bi bi-cart"></i>
              <span id="contador-carrito" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 12px;">0</span>
          </a>
      </section>

    <!-- section de producto destacado -->                      
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

      <?php
      // Puedes incluir tu pie de página aquí si 'productos.php' es una página independiente
      // require_once('php/pie.php'); // Ajusta la ruta según sea necesario
      ?>
      <!-- /Hero Section -->

     <!-- Sesion Productosn -->
        <section id="productos" class="about section" style="background-color: #978585; padding: 40px 0;">
                  <div class="container" data-aos="fade-up">
                    <div class="row justify-content-center gy-4">

                        <?php
                        // --- CONFIGURACIÓN DE RUTAS ---
                        // Ruta del archivo TXT de productos (ajusta si es necesario)
                        // Si este archivo PHP está en 'php/' y 'txt/juegos.txt' está en la raíz del proyecto
                        $ruta_txt = 'user/cargarP/txt/juegos.txt'; 
                        
                        // Carpeta donde se guardan las portadas de las imágenes (ajusta si es necesario)
                        // Si este archivo PHP está en 'php/' y 'portadas/' está en la raíz del proyecto
                        $ruta_portadas = 'user/cargarP/portadas/'; 
                        
                        // --- LECTURA DEL ARCHIVO TXT ---
                        $productos = [];
                        if (file_exists($ruta_txt) && is_readable($ruta_txt)) {
                            $lineas = file($ruta_txt, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                            foreach ($lineas as $linea) {
                                $datos = explode(';', $linea);
                                // Asegurarse de que la línea tiene suficientes datos (ID + 7 datos = 8 campos)
                                if (count($datos) >= 8) {
                                    $productos[] = [
                                        'id' => $datos[0],
                                        'titulo' => htmlspecialchars($datos[1]),
                                        'descripcion' => htmlspecialchars($datos[2]),
                                        'categoria' => htmlspecialchars($datos[3]),
                                        'precio' => htmlspecialchars($datos[4]),
                                        'foto1' => htmlspecialchars($datos[5]),
                                        'foto2' => htmlspecialchars($datos[6]),
                                        'foto3' => htmlspecialchars($datos[7])
                                    ];
                                }
                            }
                        } else {
                            echo '<div class="col-12 text-center text-white"><p>No se encontraron productos o el archivo no se pudo leer.</p></div>';
                        }

                        // --- GENERACIÓN DINÁMICA DE PRODUCTOS ---
                        if (!empty($productos)) {
                            foreach ($productos as $producto) {
                                // Construye la URL de la primera foto. Si no hay foto, usa una por defecto.
                                $url_foto_principal = !empty($producto['foto1']) ? $ruta_portadas . $producto['foto1'] : 'assets/img/placeholder.jpg'; // Asegúrate de tener una imagen de placeholder si no hay foto.

                                // Formatea el precio a moneda argentina (pesos)
                                $precio_formateado = '$' . number_format($producto['precio'], 0, ',', '.'); // Sin decimales para pesos si el precio es entero
                                // Si el precio puede tener decimales, usa: number_format($producto['precio'], 2, ',', '.')

                                ?>
                                <div class="col-6 col-md-4 col-lg-3 d-flex">
                                <a href="producos.php?id=<?php echo $producto['id']; ?>" class="w-100 text-decoration-none text-white">
                                        <div class="h-100 d-flex flex-column justify-content-between" style="background-color: #222; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.5); transition: transform 0.2s;">
                                            <img src="<?php echo $url_foto_principal; ?>" class="img-fluid" alt="<?php echo $producto['titulo']; ?>">
                                            <div style="padding: 15px;" class="d-flex flex-column h-100">
                                                <h3 style="margin: 0; font-size: 16px;"><?php echo $producto['titulo']; ?></h3>
                                                <p style="margin-top: 8px; color: #ccc;"><?php echo $producto['descripcion']; ?></p>
                                                <p style="color: #4caf50; font-weight: bold;"><?php echo $precio_formateado; ?></p>
                                                <button class="btn btn-success mt-auto" style="font-size: 14px;">
                                                    <i class="bi bi-cart"></i> Comprar
                                                </button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                        } else {
                            echo '<div class="col-12 text-center text-white"><p>No se pudieron cargar los productos.</p></div>';
                        }
                        ?>

                    </div>
                    </div>
        </section>
    <!-- Sesion Producto -->

  
    <!-- carrito -->
        <section id="carrito" class="section bg-light py-5">
          <div class="container" data-aos="fade-up">
        
            <!-- Título -->
            <div class="section-title text-center mb-5">
              <h2>Tu Carrito</h2>
              <p>Revisá los productos que agregaste antes de finalizar tu compra.</p>
            </div>
        
            <!-- Tabla de carrito -->
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
                <tbody>
        
                  <!-- Producto 1 -->
                  <tr>
                    <td><img src="assets/img/carpint/mesa3.jpg" alt="" width="80"></td>
                    <td>Mesa ratonera</td>
                    <td>$2500</td>
                    <td><input type="number" class="form-control text-center" value="1" min="1" style="width: 70px;"></td>
                    <td>$2500</td>
                    <td><button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button></td>
                  </tr>
        
                  <!-- Producto 2 -->
                  <tr>
                    <td><img src="assets/img/carpint/mesaluz3.jpg" alt="" width="80"></td>
                    <td>Silla patio</td>
                    <td>$3000</td>
                    <td><input type="number" class="form-control text-center" value="2" min="1" style="width: 70px;"></td>
                    <td>$6000</td>
                    <td><button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button></td>
                  </tr>
        
                  <!-- Producto 3 -->
                  <tr>
                    <td><img src="assets/img/carpint/silla4.jpg" alt="" width="80"></td>
                    <td>Mesa de luz</td>
                    <td>$1800</td>
                    <td><input type="number" class="form-control text-center" value="1" min="1" style="width: 70px;"></td>
                    <td>$1800</td>
                    <td><button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button></td>
                  </tr>
        
                </tbody>
              </table>
            </div>
        
            <!-- Total y botón de compra -->
            <div class="row justify-content-end mt-4">
              <div class="col-md-4 text-end">
                <h4 class="mb-3">Total: <strong>$10.300</strong></h4>
                <a href="#checkout" class="btn btn-dark rounded-pill px-4 py-2">Proceder a la compra</a>
              </div>
            </div>
        
          </div>
        </section>
    <!-- /carrito -->

    <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonios</h2>
        <p>Lo que nuestros clientes felices dicen sobre su experiencia de compra con nosotros</p>
      </div><!-- End Section Title -->
    
      <div class="container" data-aos="fade-up" data-aos-delay="100">
    
        <div class="swiper init-swiper">
          
          <div class="swiper-wrapper">
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Estoy encantada con mi compra. La calidad es insuperable y el envío fue súper rápido. ¡Volveré a comprar seguro!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="Cliente 1">
                <h3>Lucía Fernández</h3>
                <h4>Cliente Satisfecha</h4>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Excelente atención y productos que cumplen con lo prometido. Recomiendo esta tienda 100%.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="Cliente 2">
                <h3>Carlos Méndez</h3>
                <h4>Cliente Frecuente</h4>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>El producto llegó en perfectas condiciones y la atención post-venta fue muy cordial. ¡Muy recomendable!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="Cliente 3">
                <h3>Romina López</h3>
                <h4>Nueva Clienta</h4>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Gran variedad y precios competitivos. Encontré justo lo que buscaba con excelente calidad.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="Cliente 4">
                <h3>Matías Gómez</h3>
                <h4>Comprador Satisfecho</h4>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Servicio excelente y producto de calidad premium. Sin duda volveré a comprar aquí.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="Cliente 5">
                <h3>John Larson</h3>
                <h4>Cliente Recurrente</h4>
              </div>
            </div><!-- End testimonial item -->
    
          </div>
          <div class="swiper-pagination"></div>
        </div>
    
      </div>
    
        </section>
    <!-- /Testimonials Section -->

    <!-- comentario -->
      <section id="comentario" class="contact section">

          <!-- Título de la sección -->
              <div class="container section-title" data-aos="fade-up">
                <h2>Dejá tu Comentario</h2>
                <p>¿Qué te pareció nuestra página? Tu opinión nos ayuda a mejorar.</p>
              </div> 
          <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

              <div class="row gy-4 justify-content-center">

                <div class="col-lg-8">
                  <form action="forms/comment.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">

                      <div class="col-md-6">
                        <label for="name-field" class="pb-2">Tu nombre</label>
                        <input type="text" name="name" id="name-field" class="form-control" required>
                      </div>

                      <div class="col-md-6">
                        <label for="email-field" class="pb-2">Tu WhatsApp (opcional)</label>
                        <input type="tel" class="form-control" name="tel" id="email-field" placeholder="Ej: 381-000-000">
                      </div>

                      <div class="col-md-12">
                        <label for="message-field" class="pb-2">Tu comentario</label>
                        <textarea class="form-control" name="message" rows="6" id="message-field" placeholder="Escribí tu experiencia o sugerencia..." required></textarea>
                      </div>

                      <div class="col-md-12 text-center">
                        <div class="loading">Enviando...</div>
                        <div class="error-message"></div>
                        <div class="sent-message">¡Gracias por tu comentario!</div>

                        <button type="submit">Enviar Comentario</button>
                      </div>

                    </div>
                  </form>
                </div><!-- End Comment Form -->

              </div>

            </div>

      </section>
    <!-- /comentario -->

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