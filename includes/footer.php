<?php
// Verificar que init.php fue incluido
if (!defined('BASE_URL')) {
    // Intentar cargar desde la ubicación correcta
    $init_path = dirname(__DIR__) . '/init.php';
    if (file_exists($init_path)) {
        require_once $init_path;
    }
}
?>

    </main> <!-- Cierre del main -->
    
    <!-- Footer -->
    <footer class="bg-primary text-white py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <!-- Información principal -->
                <div class="mb-6">
                    <h3 class="text-xl font-bold mb-2 text-light"><?php echo SITIO_NOMBRE; ?></h3>
                    <p class="mb-1"><?php echo ALUMNOS_DUPLA; ?></p>
                    <p class="mb-1"><?php echo CARRERA . ' • ' . GRUPO; ?></p>
                    <p class="mb-1"><?php echo MATERIA . ' • ' . CUATRIMESTRE; ?></p>
                    <p class="text-light/80 text-sm"><?php echo INSTITUCION; ?></p>
                </div>
                
                <!-- Enlaces rápidos SIN CONTACTO -->
                <div class="mb-6">
                    <h4 class="font-semibold mb-3 text-light">Enlaces Rápidos</h4>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="<?php echo url('index.php'); ?>" class="hover:text-light transition">Inicio</a>
                        <a href="<?php echo url('unidades/unidad1.php'); ?>" class="hover:text-light transition">Unidad 1</a>
                        <a href="<?php echo url('unidades/unidad2.php'); ?>" class="hover:text-light transition">Unidad 2</a>
                        <a href="<?php echo url('unidades/unidad3.php'); ?>" class="hover:text-light transition">Unidad 3</a>
                        <a href="<?php echo url('about.php'); ?>" class="hover:text-light transition">Acerca</a>
                    </div>
                </div>
                
                <!-- Derechos y créditos -->
                <div class="pt-6 border-t border-light/30">
                    <p class="text-sm text-light/80">
                        &copy; <?php echo date('Y'); ?> <?php echo ALUMNOS_DUPLA; ?> • 
                        Portafolio de Evidencias Académicas
                    </p>
                    <p class="text-xs text-light/60 mt-1">
                        Desarrollado con PHP, Tailwind CSS y ❤️
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script src="<?php echo url('assets/js/main.js'); ?>"></script>
    
    <!-- Scripts adicionales por página -->
    <?php if (isset($page_scripts)): ?>
        <?php foreach ($page_scripts as $script): ?>
            <script src="<?php echo url($script); ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
    
    <!-- Script para header fijo -->
    <script>
        // Header con efecto scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.site-header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Menú móvil (si es necesario)
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Portafolio Framework cargado correctamente');
        });
    </script>
</body>
</html>