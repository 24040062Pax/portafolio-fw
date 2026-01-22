<?php
// Usar rutas relativas correctas
$base_path = dirname(__DIR__) . '/';
require_once $base_path . 'init.php';

$page_title = "Unidad 2 - Backend | " . SITIO_NOMBRE;
require_once $base_path . 'includes/header.php';
?>

<!-- Banner de la unidad -->
<div class="relative h-72 bg-gradient-to-r from-secondary to-accent">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=2074&q=80" 
             alt="Backend Development" class="w-full h-full object-cover">
    </div>
    <div class="relative container mx-auto px-4 h-full flex items-center">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Unidad 2: Proceso de Desarrollo de Backend</h1>
            <p class="text-light text-xl">Lógica del servidor, APIs y bases de datos</p>
            <div class="mt-6 flex flex-wrap gap-2">
                <span class="bg-white/20 px-3 py-1 rounded-full text-sm">PHP</span>
                <span class="bg-white/20 px-3 py-1 rounded-full text-sm">MySQL</span>
                <span class="bg-white/20 px-3 py-1 rounded-full text-sm">APIs REST</span>
                <span class="bg-white/20 px-3 py-1 rounded-full text-sm">Autenticación</span>
                <span class="bg-white/20 px-3 py-1 rounded-full text-sm">Seguridad</span>
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
                    La unidad 2 está actualmente en desarrollo. Pronto encontrarás aquí contenido completo.
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
                <a href="unidad1.php" class="btn btn-primary inline-flex items-center justify-center px-8">
                    <i class="fas fa-arrow-left mr-2"></i> Volver a Unidad 1
                </a>
                <a href="../index.php" class="btn bg-white border border-primary text-primary hover:bg-primary hover:text-white inline-flex items-center justify-center px-8">
                    <i class="fas fa-home mr-2"></i> Ir al Inicio
                </a>
            </div>
            
            <!-- Progreso -->
            <div class="mt-12 pt-12 border-t border-gray-200">
                <h3 class="font-bold text-gray-700 mb-4">Progreso del Desarrollo</h3>
                <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                    <div class="bg-primary h-2 rounded-full" style="width: 30%"></div>
                </div>
                <p class="text-gray-500 text-sm">30% completado • Estamos trabajando en ello</p>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>