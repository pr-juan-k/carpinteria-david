<?php
session_start();

// 1. Validar que todos los campos de texto no estén vacíos
// Y que las TRES fotos se hayan subido correctamente y sin errores.
if (
    !empty($_FILES['foto1']['name']) && $_FILES['foto1']['error'] === UPLOAD_ERR_OK &&
    !empty($_FILES['foto2']['name']) && $_FILES['foto2']['error'] === UPLOAD_ERR_OK &&
    !empty($_FILES['foto3']['name']) && $_FILES['foto3']['error'] === UPLOAD_ERR_OK && // ¡NUEVA VALIDACIÓN PARA FOTO3!
    !empty($_POST['titulo']) &&
    !empty($_POST['descripcion']) &&
    !empty($_POST['categoria']) &&
    !empty($_POST['precio'])
) {
    echo '<p>Se están procesando los datos </p>';

    // Sanitizar el título para usarlo en los nombres de archivo
    $titulo_sanitizado = preg_replace('/[^a-zA-Z0-9_-]/', '', $_POST['titulo']);

    // --- Lógica para la PRIMERA FOTO (foto1) ---
    $nombre_archivo_original1 = $_FILES['foto1']['name'];
    $origen1 = $_FILES['foto1']['tmp_name'];
    $ext1 = pathinfo($nombre_archivo_original1, PATHINFO_EXTENSION);
    $destino1 = '../portadas/' . $titulo_sanitizado . '_1.' . $ext1;

    // --- Lógica para la SEGUNDA FOTO (foto2) ---
    $nombre_archivo_original2 = $_FILES['foto2']['name'];
    $origen2 = $_FILES['foto2']['tmp_name'];
    $ext2 = pathinfo($nombre_archivo_original2, PATHINFO_EXTENSION);
    $destino2 = '../portadas/' . $titulo_sanitizado . '_2.' . $ext2;

    // --- Lógica para la TERCERA FOTO (foto3) ---
    $nombre_archivo_original3 = $_FILES['foto3']['name'];
    $origen3 = $_FILES['foto3']['tmp_name'];
    $ext3 = pathinfo($nombre_archivo_original3, PATHINFO_EXTENSION);
    $destino3 = '../portadas/' . $titulo_sanitizado . '_3.' . $ext3;

    // Crear la carpeta 'portadas' si no existe
    $carpeta_portadas = '../portadas/';
    if (!file_exists($carpeta_portadas)) {
        mkdir($carpeta_portadas, 0777, true); 
    }

    // Mover LAS TRES fotos
    $resultado_movimiento1 = move_uploaded_file($origen1, $destino1);
    $resultado_movimiento2 = move_uploaded_file($origen2, $destino2);
    $resultado_movimiento3 = move_uploaded_file($origen3, $destino3);

    // 2. Verificar que LAS TRES se movieron con éxito
    if ($resultado_movimiento1 && $resultado_movimiento2 && $resultado_movimiento3) {

        // --- Generar un ID único para el producto ---
        $producto_id = uniqid(); // Genera un ID único basado en la marca de tiempo

        // Preparamos los datos para guardar en el archivo de texto
        // Importante: El ID ahora es el primer elemento
        $datos_producto = [
            $producto_id, // ¡NUEVO: El ID del producto!
            $_POST['titulo'],
            $_POST['descripcion'],
            $_POST['categoria'],
            $_POST['precio'],
            basename($destino1), // Nombre de la primera imagen
            basename($destino2), // Nombre de la segunda imagen
            basename($destino3)  // Nombre de la tercera imagen
        ];

        // Usamos $datos_producto en lugar de $_POST directamente para el implode
        $linea = implode(';', $datos_producto);

        $carpeta_txt = '../txt/';
        if (!file_exists($carpeta_txt)) {
            mkdir($carpeta_txt, 0777, true);
        }
        $nombre_archivo_txt = 'juegos.txt';
        $archi = fopen($carpeta_txt . $nombre_archivo_txt, 'a');

        if ($archi) {
            fputs($archi, $linea . PHP_EOL);
            fclose($archi);
            echo '<p>Datos guardados en el archivo de texto con éxito.</p>';
            header('refresh:2;url=list_products.php'); // Asegúrate que sea la URL correcta para tu listado
            exit();
        } else {
            echo '<p>Error al abrir el archivo de texto para guardar los datos.</p>';
        }

    } else {
        echo '<p>Error al mover una o más imágenes subidas. Verifique los permisos de la carpeta "portadas".</p>';
    }
} else {
    echo '<p>¡ERROR: Faltan datos o no se seleccionaron todas las imágenes!</p>';
    // Para depuración, puedes descomentar estas líneas:
    // echo '<pre>';
    // print_r($_POST);
    // print_r($_FILES);
    // echo '</pre>';
    header('refresh:4;url=../cargar.php');
    exit();
}
?>