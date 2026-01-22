<?php
require_once 'init.php';
$page_title = "Acerca del Proyecto | " . SITIO_NOMBRE;
require_once 'includes/header.php';
?>

<div class="py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-center text-primary mb-4">Acerca de este Portafolio</h1>
            
            <div class="card mb-12 overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-2/3 p-8">
                        <h2 class="text-2xl font-bold text-primary mb-4">Objetivo del Proyecto</h2>
                        <p class="text-gray-700 mb-4">
                            Este portafolio de evidencias ha sido desarrollado como parte de la materia de 
                            <strong><?php echo MATERIA; ?></strong>. Su propósito es demostrar la aplicación práctica 
                            de los conceptos teóricos vistos en clase, integrando frontend, backend y principios 
                            de seguridad en una aplicación web completa.
                        </p>
                        <p class="text-gray-700 mb-6">
                            A través de este proyecto, se busca evidenciar el proceso de aprendizaje y la capacidad 
                            de desarrollar aplicaciones web utilizando tecnologías modernas y buenas prácticas de desarrollo.
                        </p>
                        
                        <h3 class="text-xl font-bold text-secondary mt-8 mb-4">Tecnologías Utilizadas</h3>
                        <div class="flex flex-wrap gap-3 mb-6">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">PHP</span>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">Tailwind CSS</span>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">JavaScript</span>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">HTML5</span>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">Responsive Design</span>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">Git</span>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">PHPMailer</span>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">SMTP</span>
                        </div>
                    </div>
                    
                    <div class="md:w-1/3 bg-gradient-to-b from-primary to-secondary p-8 flex flex-col justify-center">
                        <div class="text-center text-white">
                            <i class="fas fa-laptop-code text-6xl mb-4"></i>
                            <h3 class="text-xl font-bold mb-2">Aplicación Web</h3>
                            <p class="text-light">Portafolio de evidencias académicas</p>
                            <div class="mt-6">
                                <p class="text-sm">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    <?php echo CUATRIMESTRE; ?>
                                </p>
                                <p class="text-sm mt-2">
                                    <i class="fas fa-users mr-2"></i>
                                    Desarrollo en equipo
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Características -->
            <h2 class="text-2xl font-bold text-primary mb-6">Características del Portafolio</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                <div class="card p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-accent/20 p-3 rounded-lg mr-4">
                            <i class="fas fa-mobile-alt text-accent text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-primary">Diseño Responsivo</h3>
                    </div>
                    <p class="text-gray-600">Adaptable a todos los dispositivos: móviles, tablets y desktop.</p>
                </div>
                
                <div class="card p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-accent/20 p-3 rounded-lg mr-4">
                            <i class="fas fa-palette text-accent text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-primary">Paleta de Colores Personalizada</h3>
                    </div>
                    <p class="text-gray-600">Implementación de la paleta: #6B3F69, #8D5F8C, #A376A2, #DDC3C3.</p>
                </div>
                
                <div class="card p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-accent/20 p-3 rounded-lg mr-4">
                            <i class="fas fa-code-branch text-accent text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-primary">Estructura Modular</h3>
                    </div>
                    <p class="text-gray-600">Código organizado en componentes reutilizables con PHP.</p>
                </div>
                
                <div class="card p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-accent/20 p-3 rounded-lg mr-4">
                            <i class="fas fa-shield-alt text-accent text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-primary">Navegación Segura</h3>
                    </div>
                    <p class="text-gray-600">Implementación de navegación fija y menú responsivo.</p>
                </div>
            </div>
            
            <!-- Equipo de desarrollo -->
            <div class="bg-gradient-to-r from-light/20 to-accent/10 rounded-xl p-8 mb-8">
                <h3 class="text-xl font-bold text-primary mb-4">Equipo de Desarrollo</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-lg">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary/10 p-3 rounded-full mr-4">
                                <i class="fas fa-user text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800"><?php echo ALUMNO1_NOMBRE; ?></h4>
                                <p class="text-gray-600 text-sm">24040062@alumno.utc.edu.mx</p>
                            </div>
                        </div>
                        <p class="text-gray-700">Miembro del equipo de desarrollo.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary/10 p-3 rounded-full mr-4">
                                <i class="fas fa-user text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800"><?php echo ALUMNO2_NOMBRE; ?></h4>
                                <p class="text-gray-600 text-sm">24040068@alumno.utc.edu.mx</p>
                            </div>
                        </div>
                        <p class="text-gray-700">Miembro del equipo de desarrollo.</p>
                    </div>
                </div>
            </div>
            
            <!-- Botón de regreso -->
            <div class="text-center">
                <a href="index.php" class="btn btn-primary inline-flex items-center px-8 py-3">
                    <i class="fas fa-home mr-2"></i> Ir al Inicio
                </a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>