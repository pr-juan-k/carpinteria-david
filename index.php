<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pro Muebles</title>
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

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      
      <h4>Pro Muebles</h4>
    </a>
   
    <div class="social-links text-center">
      <a href="https://www.facebook.com/profile.php?id=61577394028285&sk=about" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="https://www.instagram.com/promueblestucuman/?igsh=bWltbWtlMGFnemt5#"><i class="bi bi-instagram"></i></a>
      <a href="https://wa.me/5493813489238" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#inicio"><i class="bi bi-house-door navicon"></i> Inicio</a></li>
        <li><a href="#productos"><i class="bi bi-box-seam navicon"></i> Productos</a></li>

        
        <li><a href="#sobrenosotros"><i class="bi bi-people navicon"></i> Sobre nosotros</a></li>
        <li><a href="carrito.php"><i class="bi bi-cart navicon"></i> Carrito</a></li>
        <li><a href="#testimonials"><i class="bi bi-chat-left-quote navicon"></i> Testimonios</a></li>
        <li><a href="#comentario"><i class="bi bi-pencil-square navicon"></i> Déjanos un comentario</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Section inicio-->
    <section id="inicio" class="hero section dark-background">
    
      <img src="assets/img/carpint/fond5.jpg" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Pro Muebles</h2>
        <p>Diseños: <span class="typed" data-typed-items="Mesas , Sillas">Muebles</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section>
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

   

   
    <!-- sobrenosotros-->
    <section id="sobrenosotros" class="resume section py-5" style="background-color: #978585;">
      <div class="container" data-aos="fade-up">
    
        <!-- Título de sección -->
        <div class="section-title text-center mb-5">
          <h2>Sobre Nosotros</h2>
          <p>Con más de una década de experiencia, diseñamos y fabricamos muebles personalizados que combinan funcionalidad, estilo y durabilidad.</p>
        </div>
    
        <div class="row align-items-center gy-4">
    
          <!-- Imagen representativa -->
          <div class="col-lg-5 text-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/carpint/fabrica2.jpg" class="img-fluid rounded shadow-sm" alt="Equipo de trabajo">
          </div>
    
          <!-- Descripción institucional -->
          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
            <h3 class="mb-3">Más de 12 años creando calidad a medida</h3>
            <p class="mb-4">
              Somos una empresa especializada en la fabricación de muebles a medida, combinando diseño artesanal con tecnología de precisión.
              Nuestro equipo de profesionales cuenta con más de <strong>12 años de trayectoria</strong> en el rubro del mobiliario personalizado.
            </p>
    
            <ul class="list-unstyled">
              <li><i class="bi bi-check-circle text-success me-2"></i> Más de <strong>500 proyectos únicos</strong> entregados.</li>
              <li><i class="bi bi-check-circle text-success me-2"></i> Presencia en <strong>locales, hogares y oficinas</strong>.</li>
              <li><i class="bi bi-check-circle text-success me-2"></i> <strong>Asesoramiento personalizado</strong> para cada cliente.</li>
              <li><i class="bi bi-check-circle text-success me-2"></i> Uso de <strong>materiales premium</strong> y sustentables.</li>
              <li><i class="bi bi-check-circle text-success me-2"></i> Taller y showroom propios.</li>
            </ul>
    
            <p class="mt-4">Nuestro compromiso es acompañarte en cada paso del diseño de tu mueble ideal, desde la idea hasta la instalación final. Eleginos por nuestra calidad, experiencia y responsabilidad.</p>
    
            <a href="https://wa.me/5493813489238" class="btn btn-dark mt-3 rounded-pill px-4 py-2">Contactanos</a>
          </div>
    
        </div>
    
        <!-- Bloque de contacto con mapa y redes -->
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="info-wrap">
    
              <!-- Dirección -->
              <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="200">
                <a href="https://www.google.com.ar/maps/place/Av.+Am%C3%A9rico+Vespucio+2672,+T4000+San+Miguel+de+Tucum%C3%A1n,+Tucum%C3%A1n/@-26.8511961,-65.2457061,17z/data=!4m6!3m5!1s0x94225c82754162af:0xfd675aad3f3838a!8m2!3d-26.8511961!4d-65.2457061!16s%2Fg%2F11w3y_7ywb?utm_campaign=ml-o&g_ep=Eg1tbF8yMDI1MDYxMV8wIOC7DCoASAJQAg%3D%3D" target="_blank">
                    <i class="bi bi-geo-alt flex-shrink-0 fs-4 me-3 text-dark"></i>
                </a>
                
                <a href="https://www.google.com.ar/maps/place/Av.+Am%C3%A9rico+Vespucio+2672,+T4000+San+Miguel+de+Tucum%C3%A1n,+Tucum%C3%A1n/@-26.8511961,-65.2457061,17z/data=!4m6!3m5!1s0x94225c82754162af:0xfd675aad3f3838a!8m2!3d-26.8511961!4d-65.2457061!16s%2Fg%2F11w3y_7ywb?utm_campaign=ml-o&g_ep=Eg1tbF8yMDI1MDYxMV8wIOC7DCoASAJQAg%3D%3D" target="_blank" style="text-decoration: none; color: inherit;">
                    <div>
                        <h5 class="mb-1">Dirección</h5>
                        <p>Av. Americo Vespucio 2672, San Miguel de Tucumán, Argentina, 4000</p>
                    </div>
                </a>
            </div>
              <!-- Facebook -->
            <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="300">
              <a href="https://www.facebook.com/profile.php?id=61577394028285&sk=about" target="_blank" style="text-decoration: none; color: inherit;">
                  <i class="bi bi-facebook flex-shrink-0 fs-4 me-3 text-primary"></i>
              </a>
              <a href="https://www.facebook.com/profile.php?id=61577394028285&sk=about" target="_blank" style="text-decoration: none; color: inherit;">
                  <div>
                      <h5 class="mb-1">Facebook</h5>
                      <p>Seguinos en Facebook</p>
                  </div>
              </a>
          </div>
          
          <!-- Instagram -->
          
          <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="400">
              <a href="https://www.instagram.com/promueblestucuman/?igsh=bWltbWtlMGFnemt5#" target="_blank" style="text-decoration: none; color: inherit;">
                  <i class="bi bi-instagram flex-shrink-0 fs-4 me-3 text-danger"></i>
              </a>
              <a href="https://www.instagram.com/promueblestucuman/?igsh=bWltbWtlMGFnemt5#" target="_blank" style="text-decoration: none; color: inherit;">
                  <div>
                      <h5 class="mb-1">Instagram</h5>
                      <p>Seguinos en Instagram</p>
                  </div>
              </a>
          </div>
    
            </div>
          </div>
    
          
    
      </div>
    </section>
    <!-- /sobrenosotros -->

   

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonios</h2>
        <p>Lo que nuestros clientes felices dicen sobre su experiencia de compra con nosotros</p>
      </div><!-- End Section Title -->
    
      <div class="container" data-aos="fade-up" data-aos-delay="100">
    
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Estoy encantada con mi compra en Pro Muebles. La calidad es insuperable. ¡Volveré a comprar seguro!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="Cliente 2">
                
                <h3>Lucía Fernández</h3>
                <h4>Cliente Satisfecha</h4>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Excelente atención y productos que cumplen con lo prometido.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="Cliente 1">
                <h3>Carlos Méndez</h3>
                <h4>Cliente Frecuente</h4>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>El producto Fue entregado en perfectas condiciones y en la fecha prometida. ¡Muy recomendable!</span>
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
                  <span>Encontré justo lo que buscaba con excelente calidad,Genio los chicos.</span>
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
                  <span>Excelente Sillas y calidad Pro Muebles jaja. Sin duda volveré a comprar aquí.</span>
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
    
    </section><!-- /Testimonials Section -->

    <!-- comentario -->
  <section id="comentario" class="contact section">

    <!-- Título de la sección -->
        <div class="container section-title" data-aos="fade-up">
        <h2>Dejá tu Comentario</h2>
        <p>¿Qué te pareció nuestra página? Tu opinión nos ayuda a mejorar.</p>
        </div><!-- End Section Title -->


        <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 justify-content-center">

        <div class="col-lg-8">
            <form id="whatsappForm" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                    <div class="col-md-6">
                        <label for="name-field" class="pb-2">Tu nombre</label>
                        <input type="text" name="name" id="name-field" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label for="tel-field" class="pb-2">Tu WhatsApp (opcional)</label>
                        <input type="tel" class="form-control" name="tel" id="tel-field" placeholder="Ej: 381-000-000">
                    </div>

                    <div class="col-md-12">
                        <label for="message-field" class="pb-2">Tu comentario</label>
                        <textarea class="form-control" name="message" rows="6" id="message-field" placeholder="Escribí tu experiencia o sugerencia..." required></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <div class="loading" style="display: none;">Preparando mensaje...</div>
                        <div class="error-message" style="display: none;"></div>
                        <div class="sent-message" style="display: none;">Redirigiendo a WhatsApp...</div>

                        <button type="submit">Enviar Comentario por WhatsApp</button>
                    </div>

                </div>
            </form>
        </div></div>

    </div>

  </section>
    <!-- /comentario -->

</main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Pro Muebles</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
       
        Designed by <a href="#">Program.JK</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Botón WhatsApp -->
  <a href="https://wa.me/5493813489238" target="_blank" id="whatsapp-button" class="whatsapp-button d-flex align-items-center justify-content-center">
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