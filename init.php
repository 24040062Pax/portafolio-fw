<?php
/**
 * Inicialización de la aplicación
 * Este archivo debe ser requerido al inicio de cada página
 */

// Evitar mostrar errores de PHP en pantalla (solo registrar en logs)
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

// Ruta base del proyecto
$root_path = dirname(__FILE__);
define('ROOT_PATH', $root_path . DIRECTORY_SEPARATOR);

// Crear directorio de logs si no existe
$log_dir = ROOT_PATH . 'logs';
if (!file_exists($log_dir)) {
    @mkdir($log_dir, 0755, true);
}
ini_set('error_log', $log_dir . DIRECTORY_SEPARATOR . 'error.log');

// Cargar configuración
$config_file = ROOT_PATH . 'config.php';
if (!file_exists($config_file)) {
    // Mensaje amigable en lugar de error técnico
    die('<div style="font-family: Arial; max-width: 600px; margin: 50px auto; padding: 20px; text-align: center;">
        <h2 style="color: #721c24;">⚠️ Configuración requerida</h2>
        <p>El archivo de configuración no se encuentra.</p>
        <p>Por favor, contacta al administrador del sitio.</p>
        <a href="javascript:history.back()" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background: #6B3F69; color: white; text-decoration: none; border-radius: 5px;">← Volver</a>
    </div>');
}

require_once $config_file;

// Verificar constantes esenciales con valores por defecto
if (!defined('BASE_URL')) {
    // Detectar BASE_URL automáticamente
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://";
    $domain = $_SERVER['HTTP_HOST'];
    $folder = dirname($_SERVER['SCRIPT_NAME']);
    define('BASE_URL', rtrim($protocol . $domain . $folder, '/') . '/');
}

if (!defined('SITIO_NOMBRE')) {
    define('SITIO_NOMBRE', 'Portafolio Framework');
}

if (!defined('MODO_DESARROLLO')) {
    define('MODO_DESARROLLO', false);
}

// Constantes de rutas importantes
if (!defined('INCLUDES_PATH')) {
    define('INCLUDES_PATH', ROOT_PATH . 'includes' . DIRECTORY_SEPARATOR);
}

// Función para obtener rutas absolutas
function get_base_path() {
    static $base_path = null;
    
    if ($base_path === null) {
        // Determinar la profundidad del archivo actual desde la raíz
        $script_path = $_SERVER['SCRIPT_FILENAME'];
        $root_path = ROOT_PATH;
        
        // Contar cuántos directorios hay que subir
        $relative_path = str_replace($root_path, '', dirname($script_path));
        $depth = substr_count($relative_path, DIRECTORY_SEPARATOR);
        
        // Construir la ruta base relativa
        $base_path = '';
        for ($i = 0; $i < $depth; $i++) {
            $base_path .= '../';
        }
    }
    
    return $base_path;
}

// Función para generar URLs seguras
function url($path = '') {
    $clean_path = ltrim($path, '/');
    
    // Si ya es una URL completa, devolverla
    if (strpos($clean_path, 'http://') === 0 || strpos($clean_path, 'https://') === 0) {
        return $clean_path;
    }
    
    // Si la ruta empieza con BASE_URL, devolverla
    if (strpos($clean_path, BASE_URL) === 0) {
        return $clean_path;
    }
    
    // Usar la función get_base_path() para rutas relativas
    if (strpos($clean_path, '../') === 0 || strpos($clean_path, './') === 0) {
        return BASE_URL . $clean_path;
    }
    
    // Para rutas absolutas desde la raíz del sitio
    return BASE_URL . $clean_path;
}

// Función para incluir archivos de manera segura
function safe_include($file) {
    $base_path = get_base_path();
    $full_path = $base_path . ltrim($file, '/');
    
    if (file_exists($full_path)) {
        return require_once $full_path;
    }
    
    // Si no existe, intentar desde la raíz
    $root_path = ROOT_PATH . ltrim($file, '/');
    if (file_exists($root_path)) {
        return require_once $root_path;
    }
    
    // Si aún no existe, mostrar error controlado
    if (MODO_DESARROLLO) {
        die("Archivo no encontrado: $file<br>Buscado en: $full_path<br>y en: $root_path");
    }
    
    return false;
}

// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Establecer zona horaria
date_default_timezone_set('America/Mexico_City');

// Iniciar buffer de salida
ob_start();
?>