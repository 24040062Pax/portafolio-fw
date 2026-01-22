<?php
// Página principal del portafolio
require_once 'init.php';
$page_title = "Inicio | " . SITIO_NOMBRE;
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="py-16 md:py-24 bg-gradient-to-r from-primary to-secondary text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-fade-in">
                Portafolio de Evidencias
            </h1>
            <h2 class="text-2xl md:text-3xl text-light mb-8">
                <?php echo MATERIA; ?>
            </h2>
            
            <!-- Información del equipo -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 mb-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
                    <div>
                        <p class="mb-3">
                            <i class="fas fa-users mr-2"></i>
                            <strong>Equipo:</strong><br>
                            <span class="text-light"><?php echo ALUMNO1_NOMBRE; ?></span><br>
                            <span class="text-light"><?php echo ALUMNO2_NOMBRE; ?></span>
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-graduation-cap mr-2"></i>
                            <strong>Carrera:</strong><br>
                            <span class="text-light"><?php echo CARRERA; ?></span>
                        </p>
                    </div>
                    <div>
                        <p class="mb-3">
                            <i class="fas fa-book mr-2"></i>
                            <strong>Materia:</strong><br>
                            <span class="text-light"><?php echo MATERIA; ?></span>
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <strong>Período:</strong><br>
                            <span class="text-light"><?php echo CUATRIMESTRE; ?></span>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Introducción -->
            <div class="bg-white/90 text-gray-800 rounded-2xl shadow-xl p-8 mb-10">
                <p class="text-lg md:text-xl leading-relaxed mb-4">
                    Este portafolio presenta las evidencias del desarrollo de una aplicación web completa, 
                    aplicando conceptos teóricos y prácticos de <strong>frontend, backend y seguridad web</strong>.
                </p>
                <p class="text-lg md:text-xl leading-relaxed">
                    El objetivo principal es demostrar la aplicación de <strong>buenas prácticas de desarrollo</strong>, 
                    diseño responsivo y principios de seguridad en un proyecto real.
                </p>
            </div>
            
            <a href="#unidades" class="btn btn-primary text-lg px-8 py-3 inline-block">
                <i class="fas fa-arrow-down mr-2"></i>Explorar Unidades
            </a>
        </div>
    </div>
</section>

<!-- Unidades del Portafolio -->
<section id="unidades" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-primary mb-4">Unidades del Portafolio</h2>
        <p class="text-gray-600 text-center text-lg mb-12 max-w-3xl mx-auto">
            Explora los contenidos organizados por unidades temáticas. Cada sección contiene 
            evidencias de aprendizaje y proyectos desarrollados durante el curso.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Unidad 1 -->
            <div class="card hover:shadow-2xl transition-all duration-300">
                <div class="h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" 
                         alt="Desarrollo Frontend" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary/10 p-3 rounded-lg mr-4">
                            <i class="fas fa-palette text-primary text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-primary">Unidad 1</h3>
                            <h4 class="text-lg font-semibold text-secondary">Proceso de Desarrollo de Frontend</h4>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Fundamentos, diseño e implementación de interfaces de usuario utilizando 
                        frameworks modernos y principios de UX/UI.
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1 mb-6">
                        <li><i class="fas fa-check text-accent mr-2"></i>Fundamentos de Frontend</li>
                        <li><i class="fas fa-check text-accent mr-2"></i>Diseño y Prototipado</li>
                        <li><i class="fas fa-check text-accent mr-2"></i>Saber Hacer #1 & #2</li>
                    </ul>
                    <a href="unidades/unidad1.php" class="btn btn-primary w-full text-center">
                        <i class="fas fa-external-link-alt mr-2"></i> Explorar Unidad
                    </a>
                </div>
            </div>
            
            <!-- Unidad 2 -->
            <div class="card hover:shadow-2xl transition-all duration-300">
                <div class="h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=1174&q=80" 
                         alt="Desarrollo Backend" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary/10 p-3 rounded-lg mr-4">
                            <i class="fas fa-server text-primary text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-primary">Unidad 2</h3>
                            <h4 class="text-lg font-semibold text-secondary">Proceso de Desarrollo de Backend</h4>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Desarrollo de lógica del servidor, gestión de bases de datos, 
                        APIs y arquitectura de aplicaciones web.
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1 mb-6">
                        <li><i class="fas fa-check text-accent mr-2"></i>Fundamentos de Backend</li>
                        <li><i class="fas fa-check text-accent mr-2"></i>Diseño de APIs REST</li>
                        <li><i class="fas fa-check text-accent mr-2"></i>Bases de datos SQL/NoSQL</li>
                    </ul>
                    <a href="unidades/unidad2.php" class="btn btn-primary w-full text-center">
                        <i class="fas fa-external-link-alt mr-2"></i> Explorar Unidad
                    </a>
                </div>
            </div>
            
            <!-- Unidad 3 -->
            <div class="card hover:shadow-2xl transition-all duration-300">
                <div class="h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" 
                         alt="Seguridad Web" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary/10 p-3 rounded-lg mr-4">
                            <i class="fas fa-shield-alt text-primary text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-primary">Unidad 3</h3>
                            <h4 class="text-lg font-semibold text-secondary">Seguridad e Implementación</h4>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Principios de seguridad web, implementación en producción, 
                        hosting y despliegue de aplicaciones web.
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1 mb-6">
                        <li><i class="fas fa-check text-accent mr-2"></i>Seguridad en aplicaciones</li>
                        <li><i class="fas fa-check text-accent mr-2"></i>Implementación y despliegue</li>
                        <li><i class="fas fa-check text-accent mr-2"></i>Hosting y producción</li>
                    </ul>
                    <a href="unidades/unidad3.php" class="btn btn-primary w-full text-center">
                        <i class="fas fa-external-link-alt mr-2"></i> Explorar Unidad
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Metodología -->
<section class="py-16 bg-gradient-to-r from-accent/10 to-light/20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-primary mb-12">Metodología del Portafolio</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clipboard-check text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-3">Evidencias de Aprendizaje</h3>
                    <p class="text-gray-600">Cada unidad contiene proyectos y actividades que demuestran la aplicación de conocimientos.</p>
                </div>
                
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-laptop-code text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-3">Desarrollo Práctico</h3>
                    <p class="text-gray-600">Implementación real de conceptos mediante el desarrollo de una aplicación web completa.</p>
                </div>
                
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-rocket text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-3">Despliegue en Producción</h3>
                    <p class="text-gray-600">Publicación del portafolio en hosting para demostrar habilidades de implementación real.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>