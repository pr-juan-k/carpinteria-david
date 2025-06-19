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
      
      <h4>Pago / Pro Muebles</h4>
    </a>
   
    <div class="social-links text-center">
      <a href="https://www.facebook.com/profile.php?id=61577394028285&sk=about" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="https://www.instagram.com/promueblestucuman/?igsh=bWltbWtlMGFnemt5#"><i class="bi bi-instagram"></i></a>
      <a href="https://wa.me/5493813489238" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="index.php"><i class="bi bi-house-door navicon"></i> Inicio</a></li>
        <li><a href="#productos"><i class="bi bi-box-seam navicon"></i> Productos</a></li>
        
        <li><a href="#sobrenosotros"><i class="bi bi-people navicon"></i> Sobre nosotros</a></li>
        <li><a href="carrito.html"><i class="bi bi-cart navicon"></i> Carrito</a></li>
        <li><a href="#testimonials"><i class="bi bi-chat-left-quote navicon"></i> Testimonios</a></li>
        <li><a href="#comentario"><i class="bi bi-pencil-square navicon"></i> Déjanos un comentario</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Compra -->

    <?php 
// include 'header.php'; 
?>

<section id="compra-formu" class="section" style="background-color: #bf9a9a; padding: 60px 0;">
    <div class="container" data-aos="fade-up">
        <div class="text-center mb-5">
            <h2 id="form-title">Paso 1: Datos del Comprador</h2>
            <p id="form-subtitle">Completá tus datos para continuar con la compra.</p>
        </div>

        <div id="compra-steps">

            <div id="step-1" class="compra-step">
                <form id="form-paso1" class="row g-3 justify-content-center">
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre completo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <div class="col-md-6">
                        <label for="correo" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>

                    <div class="col-md-6">
                        <label for="whatsapp" class="form-label">WhatsApp</label>
                        <input type="tel" class="form-control" id="whatsapp" name="whatsapp" required>
                    </div>

                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn btn-dark rounded-pill px-4 py-2" style="transition: 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                            Paso 2: Elegir Forma de Pago
                        </button>
                    </div>
                </form>
            </div>

            <div id="step-2" class="compra-step" style="display: none;">
                <h3 class="text-center mb-4">Elige tu forma de pago</h3>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-3">
                        <button id="btn-link-pago" class="btn btn-primary btn-lg w-75 py-3" style="font-size: 1.2rem;">
                            Pagar con Link de Pago
                        </button>
                    </div>
                    <div class="col-md-6 text-center mb-3">
                        <button id="btn-transferencia" class="btn btn-success btn-lg w-75 py-3" style="font-size: 1.2rem;">
                            Pagar con Transferencia Directa
                        </button>
                    </div>
                </div>

                <div id="link-pago-details" class="mt-4 p-4 border rounded bg-white shadow-sm" style="display: none;">
                    <h4 class="text-center mb-3">Link de Pago</h4>
                    <p class="text-center">Haz clic en el siguiente enlace para realizar tu pago:</p>
                    <a id="payment-link" href="#" target="_blank" class="btn btn-info w-100 py-2 mb-3">Ir al Link de Pago</a>
                    <div class="text-center">
                        <button id="confirm-payment-link" class="btn btn-dark rounded-pill px-4 py-2">
                            Ya realicé el pago (Link)
                        </button>
                    </div>
                </div>

                <div id="transferencia-details" class="mt-4 p-4 border rounded bg-white shadow-sm" style="display: none;">
                    <h4 class="text-center mb-3">Datos para Transferencia Directa</h4>
                    <p>Por favor, realiza la transferencia a los siguientes datos bancarios:</p>
                    <p><strong>CBU:</strong> <span id="cbu-info">0000000000000000000000</span></p>
                    <p><strong>Alias:</strong> <span id="alias-info">TU.ALIAS.MP</span></p>
                    <p><strong>Banco:</strong> Tu Banco S.A.</p>
                    <p class="text-center mt-3">Una vez realizada la transferencia, haz clic en el botón de abajo.</p>
                    <div class="text-center">
                        <button id="confirm-payment-transfer" class="btn btn-dark rounded-pill px-4 py-2">
                            Ya realicé el pago (Transferencia)
                        </button>
                    </div>
                </div>
                <div class="text-center mt-4">
                     <button id="back-to-step1" class="btn btn-secondary rounded-pill px-4 py-2">Volver al Paso 1</button>
                </div>
            </div>

            <div id="step-3" class="compra-step text-center" style="display: none;">
                <h3 class="mb-4">¡Tu pedido ha sido recibido!</h3>
                <p>Para finalizar, por favor envía el comprobante de pago y los detalles de tu pedido a nuestro WhatsApp.</p>
                <p>Haciendo clic en el botón, el mensaje se armará automáticamente con el nombre de los productos.</p>
                
                <button id="send-whatsapp-btn" class="btn btn-success btn-lg mt-4">
                    <i class="bi bi-whatsapp me-2"></i> Enviar Pedido y Comprobante por WhatsApp
                </button>
                <div class="mt-3">
                    <button id="start-new-purchase" class="btn btn-info rounded-pill px-4 py-2">Realizar otra compra</button>
                </div>
            </div>

        </div>
    </div>
</section>

<?php 
// include 'footer.php'; 
?>

    <!-- Compra -->

    <!-- Wp -->
    <script>
    // Variables para los elementos HTML
    const formTitle = document.getElementById('form-title');
    const formSubtitle = document.getElementById('form-subtitle');
    const step1 = document.getElementById('step-1');
    const step2 = document.getElementById('step-2');
    const step3 = document.getElementById('step-3');

    const formPaso1 = document.getElementById('form-paso1');
    const btnLinkPago = document.getElementById('btn-link-pago');
    const btnTransferencia = document.getElementById('btn-transferencia');
    const linkPagoDetails = document.getElementById('link-pago-details');
    const transferenciaDetails = document.getElementById('transferencia-details');
    const paymentLink = document.getElementById('payment-link'); // El <a> para el link de pago
    const confirmPaymentLink = document.getElementById('confirm-payment-link');
    const confirmPaymentTransfer = document.getElementById('confirm-payment-transfer');
    const sendWhatsappBtn = document.getElementById('send-whatsapp-btn');
    const startNewPurchaseBtn = document.getElementById('start-new-purchase');
    const backToStep1Btn = document.getElementById('back-to-step1');

    let currentStep = 1;
    let productsInCart = []; // Aquí guardaremos los productos del carrito

    // --- Funciones para la navegación entre pasos ---

    function showStep(stepNumber) {
        step1.style.display = 'none';
        step2.style.display = 'none';
        step3.style.display = 'none';

        if (stepNumber === 1) {
            step1.style.display = 'block';
            formTitle.textContent = 'Paso 1: Datos del Comprador';
            formSubtitle.textContent = 'Completá tus datos para continuar con la compra.';
        } else if (stepNumber === 2) {
            step2.style.display = 'block';
            formTitle.textContent = 'Paso 2: Elegir Forma de Pago';
            formSubtitle.textContent = 'Seleccioná cómo querés abonar tu compra.';
            // Ocultar detalles de pago al volver a mostrar Paso 2
            linkPagoDetails.style.display = 'none';
            transferenciaDetails.style.display = 'none';
        } else if (stepNumber === 3) {
            step3.style.display = 'block';
            formTitle.textContent = 'Paso 3: Confirmación de Pedido';
            formSubtitle.textContent = 'Tu pedido está casi listo. ¡Envía el comprobante!';
        }
        currentStep = stepNumber;
    }

    // --- Lógica del Formulario y Carrito ---

    // Función para obtener los productos del carrito de sessionStorage
    function getProductsFromCart() {
        const carritoString = sessionStorage.getItem('carrito');
        if (carritoString) {
            productsInCart = JSON.parse(carritoString);
        } else {
            productsInCart = [];
        }
    }

    // --- Event Listeners ---

    document.addEventListener('DOMContentLoaded', () => {
        getProductsFromCart(); // Carga los productos del carrito al iniciar

        showStep(1); // Muestra el Paso 1 al cargar la página
    });

    // Manejar el envío del Paso 1
    formPaso1.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar el envío normal del formulario

        // Validar campos requeridos de Paso 1
        const nombre = document.getElementById('nombre').value;
        const correo = document.getElementById('correo').value;
        const whatsapp = document.getElementById('whatsapp').value;

        if (nombre && correo && whatsapp) {
            // Guardar datos del comprador (opcional, si los necesitas después)
            sessionStorage.setItem('buyerName', nombre);
            sessionStorage.setItem('buyerEmail', correo);
            sessionStorage.setItem('buyerWhatsapp', whatsapp);

            showStep(2); // Avanzar al Paso 2
        } else {
            alert('Por favor, completa todos los campos requeridos del Paso 1.');
        }
    });

    // Manejar clic en "Pagar con Link de Pago"
    btnLinkPago.addEventListener('click', () => {
        // Generar un link de pago (ejemplo, en un entorno real esto sería dinámico)
        // Puedes pasar el total del carrito al link de pago si tu pasarela lo permite
        const total = productsInCart.reduce((sum, item) => sum + (item.precio * item.cantidad), 0);
        paymentLink.href = `https://ejemplo.com/link-de-pago?monto=${total}&pedido=${Date.now()}`; // URL de ejemplo
        
        transferenciaDetails.style.display = 'none';
        linkPagoDetails.style.display = 'block';
    });

    // Manejar clic en "Pagar con Transferencia Directa"
    btnTransferencia.addEventListener('click', () => {
        linkPagoDetails.style.display = 'none';
        transferenciaDetails.style.display = 'block';
    });

    // Manejar confirmación de pago (Link)
    confirmPaymentLink.addEventListener('click', () => {
        showStep(3);
    });

    // Manejar confirmación de pago (Transferencia)
    confirmPaymentTransfer.addEventListener('click', () => {
        showStep(3);
    });

    // Manejar clic en "Volver al Paso 1"
    backToStep1Btn.addEventListener('click', () => {
        showStep(1);
    });

    // Manejar el botón de enviar WhatsApp
    sendWhatsappBtn.addEventListener('click', () => {
        const buyerName = sessionStorage.getItem('buyerName') || 'Cliente';
        let whatsappMessage = `¡Hola! Soy ${buyerName} y quiero confirmar mi pedido.\n\n`;
        whatsappMessage += `Detalles de mi compra:\n`;

        let total = 0;
        if (productsInCart.length > 0) {
            productsInCart.forEach((item, index) => {
                whatsappMessage += `${index + 1}. ${item.nombre} (x${item.cantidad}) - $${item.precio.toLocaleString('es-AR')}\n`;
                total += item.precio * item.cantidad;
            });
            whatsappMessage += `\nTotal: $${total.toLocaleString('es-AR')}\n`;
        } else {
            whatsappMessage += `No se encontraron productos en el carrito.\n`;
        }
        
        whatsappMessage += `\nAdjunto comprobante de pago.`;

        const whatsappNumber = '5493813440889'; // ¡CAMBIA ESTE NÚMERO POR TU NÚMERO DE WHATSAPP!
        const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;
        
        // Abrir WhatsApp en una nueva pestaña
        window.open(whatsappURL, '_blank');

        // Limpiar el carrito después de enviar el pedido
        sessionStorage.removeItem('carrito');
        sessionStorage.removeItem('buyerName');
        sessionStorage.removeItem('buyerEmail');
        sessionStorage.removeItem('buyerWhatsapp');

        // Opcional: Actualizar el contador del carrito si aún estuviera visible
        // Puedes agregar una función actualizarContadorCarrito() aquí si es global o la incluyes en compra.php
        // Si no la tienes en compra.php, no te preocupes, se reiniciará cuando vuelvan a productos/index.
    });

    // Manejar el botón "Realizar otra compra"
    startNewPurchaseBtn.addEventListener('click', () => {
        // Redirigir a la página principal o a la página de productos
        window.location.href = 'index.php'; // o 'productos.php' si es tu página de listado
    });

</script>
    <!-- Wp -->



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