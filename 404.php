<?php
// Cargar config.php primero
require_once 'init.php';

http_response_code(404);
$page_title = "Página no encontrada | " . SITIO_NOMBRE;
require_once 'includes/header.php';
?>

<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 text-center">
        <div>
            <div class="mx-auto h-32 w-32 text-primary">
                <i class="fas fa-exclamation-triangle text-8xl"></i>
            </div>
            <h2 class="mt-6 text-6xl font-extrabold text-gray-900">404</h2>
            <h3 class="mt-4 text-3xl font-bold text-secondary">Página no encontrada</h3>
            <p class="mt-4 text-lg text-gray-600">
                Lo sentimos, la página que estás buscando no existe o ha sido movida.
            </p>
            <div class="mt-8">
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-info-circle text-yellow-400"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700">
                                URL solicitada: <code class="bg-gray-100 px-2 py-1 rounded"><?php echo $_SERVER['REQUEST_URI']; ?></code>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8 space-y-4">
            <a href="<?php echo BASE_URL; ?>" class="btn btn-primary px-8 py-3">
                <i class="fas fa-home mr-2"></i> Volver al Inicio
            </a>
            <div class="text-sm">
                <p class="text-gray-500">¿Buscas algo específico?</p>
                <div class="mt-2 flex flex-wrap justify-center gap-2">
                    <a href="unidades/unidad1.php" class="text-primary hover:text-secondary">Unidad 1</a>
                    <a href="unidades/unidad2.php" class="text-primary hover:text-secondary">Unidad 2</a>
                    <a href="unidades/unidad3.php" class="text-primary hover:text-secondary">Unidad 3</a>
                    <a href="about.php" class="text-primary hover:text-secondary">Acerca</a>
                </div>
            </div>
        </div>
        
        <div class="mt-12 pt-8 border-t border-gray-200">
            <p class="text-sm text-gray-500">
                Si crees que esto es un error, por favor 
                <a href="about.php" class="font-medium text-primary hover:text-secondary">contáctanos</a>.
            </p>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>