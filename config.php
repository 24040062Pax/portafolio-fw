<?php
// ============================================
// CONFIGURACIÓN DEL PORTAFOLIO FRAMEWORK
// ============================================

// Detectar si estamos en local o producción
$is_local = (isset($_SERVER['HTTP_HOST']) && 
            (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || 
             strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false));

// Configuración según el entorno
if ($is_local) {
    // Configuración LOCAL
    define('BASE_URL', 'http://localhost/portafolio-fw/');
    define('MODO_DESARROLLO', true);
    define('SMTP_DEBUG', 2); // Modo debug activado para desarrollo
} else {
    // Configuración HOSTING
    // Detectar protocolo automáticamente
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || 
                $_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://";
    $domain = $_SERVER['HTTP_HOST'];
    $folder = dirname($_SERVER['SCRIPT_NAME']);
    define('BASE_URL', $protocol . $domain . $folder . '/');
    define('MODO_DESARROLLO', false);
    define('SMTP_DEBUG', 0); // Modo debug desactivado en producción
}

// Información del Equipo (DUPLA)
define('ALUMNO1_NOMBRE', 'Paola Esmeralda Pérez Granados');
define('ALUMNO2_NOMBRE', 'Karol Dariela Vazquez Telles');
define('ALUMNOS_DUPLA', ALUMNO1_NOMBRE . ' & ' . ALUMNO2_NOMBRE);

// Información Académica
define('CARRERA', 'Entornos Virtuales y Negocios Digitales');
define('GRUPO', 'EVND-5A');
define('MATERIA', 'Frameworks');
define('CUATRIMESTRE', '5° Cuatrimestre');
define('INSTITUCION', 'Universidad Tecnológica');

// Configuración del Sitio
define('SITIO_NOMBRE', 'Portafolio de Evidencias');
define('SITIO_DESCRIPCION', 'Portafolio de evidencias académicas');
define('AUTOR', ALUMNOS_DUPLA);
define('ENTORNO', $is_local ? 'Desarrollo' : 'Producción');

// Rutas del Sistema
define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('INCLUDES_PATH', ROOT_PATH . 'includes' . DIRECTORY_SEPARATOR);
define('ASSETS_PATH', ROOT_PATH . 'assets' . DIRECTORY_SEPARATOR);
define('UNIDADES_PATH', ROOT_PATH . 'unidades' . DIRECTORY_SEPARATOR);

// URLs Públicas
define('ASSETS_URL', BASE_URL . 'assets/');
define('CSS_URL', ASSETS_URL . 'css/');
define('JS_URL', ASSETS_URL . 'js/');
define('IMAGES_URL', ASSETS_URL . 'images/');

// Configuración PHPMailer
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PUERTO', 587);
define('SMTP_SEGURIDAD', 'tls');

// Configuración de errores según entorno
error_reporting(MODO_DESARROLLO ? E_ALL : 0);
ini_set('display_errors', MODO_DESARROLLO ? 1 : 0);
ini_set('log_errors', 1);
ini_set('error_log', ROOT_PATH . 'logs/error.log');

// Iniciar sesión
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Función para redirección segura
function redirect($url) {
    if (!headers_sent()) {
        header('Location: ' . $url);
    } else {
        echo '<script>window.location.href="' . $url . '";</script>';
    }
    exit();
}

// Función para sanitizar datos
function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Función para generar URL completa
function full_url($path = '') {
    return BASE_URL . ltrim($path, '/');
}
?>