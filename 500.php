<?php
// Cargar config.php primero
require_once 'init.php';

http_response_code(500);
$page_title = "Error del servidor | " . SITIO_NOMBRE;
require_once 'includes/header.php';
?>

<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 text-center">
        <div>
            <div class="mx-auto h-32 w-32 text-red-500">
                <i class="fas fa-server text-8xl"></i>
            </div>
            <h2 class="mt-6 text-6xl font-extrabold text-gray-900">500</h2>
            <h3 class="mt-4 text-3xl font-bold text-red-600">Error del servidor</h3>
            <p class="mt-4 text-lg text-gray-600">
                Lo sentimos, ha ocurrido un error interno en el servidor.
            </p>
            
            <?php if (defined('MODO_DESARROLLO') && MODO_DESARROLLO && isset($exception)): ?>
            <div class="mt-6 bg-red-50 border border-red-200 p-4 rounded-lg text-left">
                <h4 class="font-bold text-red-800 mb-2">Detalles del error (Modo Desarrollo):</h4>
                <p class="text-red-700 text-sm"><?php echo htmlspecialchars($exception->getMessage()); ?></p>
                <p class="text-red-600 text-xs mt-1">
                    Archivo: <?php echo $exception->getFile(); ?> (Línea: <?php echo $exception->getLine(); ?>)
                </p>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="mt-8 space-y-4">
            <a href="<?php echo BASE_URL; ?>" class="btn btn-primary px-8 py-3">
                <i class="fas fa-home mr-2"></i> Volver al Inicio
            </a>
            
            <div>
                <a href="javascript:history.back()" class="text-primary hover:text-secondary inline-flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Regresar a la página anterior
                </a>
            </div>
        </div>
        
        <div class="mt-12 pt-8 border-t border-gray-200">
            <p class="text-sm text-gray-500">
                Si el problema persiste, por favor 
                <a href="about.php" class="font-medium text-primary hover:text-secondary">contáctanos</a>.
            </p>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>