<?php
// Usar rutas relativas correctas
$base_path = dirname(__DIR__) . '/';
require_once $base_path . 'init.php';

$page_title = "Unidad 3 - Seguridad | " . SITIO_NOMBRE;
require_once $base_path . 'includes/header.php';
?>

<!-- Banner de la unidad -->
<div class="relative h-72 bg-gradient-to-r from-accent to-primary">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
             alt="Web Security" class="w-full h-full object-cover">
    </div>
    <div class="relative container mx-auto px-4 h-full flex items-center">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Unidad 3: Seguridad e Implementación</h1>
            <p class="text-light text-xl">Principios de seguridad web y despliegue en producción</p>
            <div class="mt-6 flex flex-wrap gap-2">
                <span class="bg-white/20 px-3 py-1 rounded-full text-sm">HTTPS/SSL</span>
                <span class="bg-white/20 px-3 py-1 rounded-full text-sm">OWASP</span>
                <span class="bg-white/20 px-3 py-1 rounded-full text-sm">Firewalls</span>
                <span class="bg-white/20 px-3 py-1 rounded-full text-sm">Hosting</span>
                <span class="bg-white/20 px-3 py-1 rounded-full text-sm">CI/CD</span>
            </div>
        </div>
    </div>
</div>

<!-- Contenido principal - EN CONSTRUCCIÓN -->
<section class="py-24">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Mensaje de construcción -->
            <div class="bg-gradient-to-r from-primary/10 to-secondary/10 rounded-2xl p-12 mb-8">
                <div class="inline-flex items-center justify-center w-32 h-32 bg-primary/20 rounded-full mb-8">
                    <i class="fas fa-tools text-primary text-5xl"></i>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Contenido en Construcción</h2>
                <p class="text-gray-600 text-lg mb-6">
                    La unidad 3 está actualmente en desarrollo. Pronto encontrarás aquí contenido completo.
                </p>

                <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 inline-block">
                    <div class="flex items-center">
                        <i class="fas fa-clock text-blue-500 text-2xl mr-4"></i>
                        <div class="text-left">
                            <h4 class="font-bold text-blue-800">Disponible Pronto</h4>
                            <p class="text-blue-600 text-sm">Estamos trabajando en el contenido</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Botones de navegación -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="unidad2.php" class="btn btn-primary inline-flex items-center justify-center px-8">
                    <i class="fas fa-arrow-left mr-2"></i> Ver Unidad 2
                </a>
                <a href="../index.php" class="btn bg-white border border-primary text-primary hover:bg-primary hover:text-white inline-flex items-center justify-center px-8">
                    <i class="fas fa-home mr-2"></i> Regresar al Inicio
                </a>
            </div>
            
            <!-- Progreso -->
            <div class="mt-12 pt-12 border-t border-gray-200">
                <h3 class="font-bold text-gray-700 mb-4">Estado Actual</h3>
                <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                    <div class="bg-accent h-2 rounded-full" style="width: 20%"></div>
                </div>
                <p class="text-gray-500 text-sm">20% completado • Iniciando desarrollo</p>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>