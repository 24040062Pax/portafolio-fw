<?php
// Usar rutas relativas correctas
$base_path = dirname(__DIR__) . '/';
require_once $base_path . 'init.php';

$page_title = "Unidad 1 - Frontend | " . SITIO_NOMBRE;
require_once $base_path . 'includes/header.php';

// Obtener el tema seleccionado de la URL
$tema_seleccionado = isset($_GET['tema']) ? $_GET['tema'] : 'fundamentos';
$subtema_seleccionado = isset($_GET['subtema']) ? $_GET['subtema'] : '';
?>

<section class="py-8">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Encabezado de la unidad -->
            <div class="bg-gradient-to-r from-primary to-secondary rounded-2xl p-8 mb-8 text-white">
                <h1 class="text-3xl md:text-4xl font-bold mb-4">Unidad 1: Proceso de Desarrollo de Frontend</h1>
                <p class="text-light text-xl">Fundamentos, diseño e implementación de interfaces de usuario</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="bg-white/20 px-3 py-1 rounded-full text-sm">HTML5</span>
                    <span class="bg-white/20 px-3 py-1 rounded-full text-sm">CSS3</span>
                    <span class="bg-white/20 px-3 py-1 rounded-full text-sm">JavaScript</span>
                    <span class="bg-white/20 px-3 py-1 rounded-full text-sm">Tailwind CSS</span>
                    <span class="bg-white/20 px-3 py-1 rounded-full text-sm">Responsive Design</span>
                </div>
            </div>
            
            <!-- Contenido principal con sidebar de navegación -->
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar de navegación -->
                <div class="lg:w-1/4">
                    <div class="card overflow-hidden sticky top-24">
                        <div class="bg-primary text-white p-4">
                            <h3 class="text-lg font-bold">Temas de la Unidad</h3>
                        </div>
                        <div class="p-0">
                            <!-- Navegación por temas -->
                            <div class="space-y-1">
                                <!-- Tema 1: Fundamentos -->
                                <div>
                                    <a href="?tema=fundamentos" 
                                       class="flex items-center justify-between p-4 hover:bg-gray-50 <?php echo $tema_seleccionado == 'fundamentos' ? 'bg-primary/10 border-l-4 border-primary' : ''; ?>">
                                        <div class="flex items-center">
                                            <span class="bg-primary text-white w-6 h-6 rounded-full flex items-center justify-center text-xs mr-3">1</span>
                                            <span class="font-medium">Fundamentos de Frontend</span>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 text-sm"></i>
                                    </a>
                                    
                                    <!-- Subtemas de Fundamentos -->
                                    <?php if ($tema_seleccionado == 'fundamentos'): ?>
                                    <div class="ml-8 space-y-1 border-l border-gray-200 pl-4 py-2">
                                        <a href="?tema=fundamentos&subtema=concepto" 
                                           class="block p-2 hover:bg-gray-50 rounded <?php echo $subtema_seleccionado == 'concepto' ? 'text-primary font-medium' : 'text-gray-600'; ?>">
                                            • Concepto de frameworks
                                        </a>
                                        <a href="?tema=fundamentos&subtema=tipos" 
                                           class="block p-2 hover:bg-gray-50 rounded <?php echo $subtema_seleccionado == 'tipos' ? 'text-primary font-medium' : 'text-gray-600'; ?>">
                                            • Tipos de frameworks
                                        </a>
                                        <a href="?tema=fundamentos&subtema=herramientas" 
                                           class="block p-2 hover:bg-gray-50 rounded <?php echo $subtema_seleccionado == 'herramientas' ? 'text-primary font-medium' : 'text-gray-600'; ?>">
                                            • Herramientas
                                        </a>
                                        <a href="?tema=fundamentos&subtema=instalacion" 
                                           class="block p-2 hover:bg-gray-50 rounded <?php echo $subtema_seleccionado == 'instalacion' ? 'text-primary font-medium' : 'text-gray-600'; ?>">
                                            • Instalación y configuración
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                
                                <!-- Tema 2: Diseño Frontend -->
                                <div>
                                    <a href="?tema=diseno" 
                                       class="flex items-center justify-between p-4 hover:bg-gray-50 <?php echo $tema_seleccionado == 'diseno' ? 'bg-primary/10 border-l-4 border-primary' : ''; ?>">
                                        <div class="flex items-center">
                                            <span class="bg-primary text-white w-6 h-6 rounded-full flex items-center justify-center text-xs mr-3">2</span>
                                            <span class="font-medium">Diseño Frontend</span>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 text-sm"></i>
                                    </a>
                                    
                                    <!-- Subtemas de Diseño -->
                                    <?php if ($tema_seleccionado == 'diseno'): ?>
                                    <div class="ml-8 space-y-1 border-l border-gray-200 pl-4 py-2">
                                        <a href="?tema=diseno&subtema=elementos" 
                                           class="block p-2 hover:bg-gray-50 rounded <?php echo $subtema_seleccionado == 'elementos' ? 'text-primary font-medium' : 'text-gray-600'; ?>">
                                            • Elementos del framework
                                        </a>
                                        <a href="?tema=diseno&subtema=mvvm" 
                                           class="block p-2 hover:bg-gray-50 rounded <?php echo $subtema_seleccionado == 'mvvm' ? 'text-primary font-medium' : 'text-gray-600'; ?>">
                                            • Modelo MVVM
                                        </a>
                                        <a href="?tema=diseno&subtema=apis" 
                                           class="block p-2 hover:bg-gray-50 rounded <?php echo $subtema_seleccionado == 'apis' ? 'text-primary font-medium' : 'text-gray-600'; ?>">
                                            • APIs y localStorage
                                        </a>
                                        <a href="?tema=diseno&subtema=hospedaje" 
                                           class="block p-2 hover:bg-gray-50 rounded <?php echo $subtema_seleccionado == 'hospedaje' ? 'text-primary font-medium' : 'text-gray-600'; ?>">
                                            • Hospedaje web
                                        </a>
                                        <a href="?tema=diseno&subtema=contenidos" 
                                           class="block p-2 hover:bg-gray-50 rounded <?php echo $subtema_seleccionado == 'contenidos' ? 'text-primary font-medium' : 'text-gray-600'; ?>">
                                            • Contenidos web
                                        </a>
                                        <a href="?tema=diseno&subtema=ux" 
                                           class="block p-2 hover:bg-gray-50 rounded <?php echo $subtema_seleccionado == 'ux' ? 'text-primary font-medium' : 'text-gray-600'; ?>">
                                            • UI/UX/IXD
                                        </a>
                                        <a href="?tema=diseno&subtema=responsivo" 
                                           class="block p-2 hover:bg-gray-50 rounded <?php echo $subtema_seleccionado == 'responsivo' ? 'text-primary font-medium' : 'text-gray-600'; ?>">
                                            • Diseño responsivo
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                
                                <!-- Saber Hacer -->
                                <div>
                                    <a href="?tema=saberhacer" 
                                       class="flex items-center justify-between p-4 hover:bg-gray-50 <?php echo $tema_seleccionado == 'saberhacer' ? 'bg-primary/10 border-l-4 border-primary' : ''; ?>">
                                        <div class="flex items-center">
                                            <span class="bg-accent text-white w-6 h-6 rounded-full flex items-center justify-center text-xs mr-3">
                                                <i class="fas fa-code"></i>
                                            </span>
                                            <span class="font-medium">Saber Hacer</span>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contenido principal -->
                <div class="lg:w-3/4">
                    <div class="card p-8">
                        <!-- Breadcrumb -->
                        <nav class="flex mb-6" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                                <li class="inline-flex items-center">
                                    <a href="../index.php" class="inline-flex items-center text-sm text-gray-700 hover:text-primary">
                                        <i class="fas fa-home mr-2"></i>
                                        Inicio
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                                        <a href="unidad1.php" class="ml-1 text-sm text-gray-700 hover:text-primary md:ml-2">Unidad 1</a>
                                    </div>
                                </li>
                                <?php if ($tema_seleccionado): ?>
                                <li aria-current="page">
                                    <div class="flex items-center">
                                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                                        <span class="ml-1 text-sm font-medium text-primary md:ml-2">
                                            <?php 
                                            $nombres_temas = [
                                                'fundamentos' => 'Fundamentos',
                                                'diseno' => 'Diseño Frontend',
                                                'saberhacer' => 'Saber Hacer'
                                            ];
                                            echo $nombres_temas[$tema_seleccionado] ?? 'Contenido';
                                            ?>
                                        </span>
                                    </div>
                                </li>
                                <?php endif; ?>
                            </ol>
                        </nav>
                        
                        <!-- Contenido dinámico según tema seleccionado -->
                        <div id="contenido-tema">
                            <?php
                            // Mostrar contenido según el tema seleccionado
                            switch ($tema_seleccionado) {
                                case 'fundamentos':
                                    mostrar_fundamentos($subtema_seleccionado);
                                    break;
                                case 'diseno':
                                    mostrar_diseno($subtema_seleccionado);
                                    break;
                                case 'saberhacer':
                                    mostrar_saber_hacer();
                                    break;
                                default:
                                    mostrar_introduccion();
                                    break;
                            }
                            
                            // Funciones para mostrar contenido
                            function mostrar_introduccion() {
                                ?>
                                <div class="text-center py-12">
                                    <div class="inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full mb-6">
                                        <i class="fas fa-book-open text-primary text-3xl"></i>
                                    </div>
                                    <h2 class="text-2xl font-bold text-primary mb-4">Proceso de Desarrollo de Frontend</h2>
                                    <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                                        Selecciona un tema del menú lateral para explorar los contenidos de esta unidad.
                                        Aquí encontrarás investigación detallada sobre fundamentos, diseño y prácticas de desarrollo frontend.
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                                        <div class="text-center p-4">
                                            <div class="inline-flex items-center justify-center w-12 h-12 bg-primary/10 rounded-full mb-3">
                                                <i class="fas fa-graduation-cap text-primary"></i>
                                            </div>
                                            <h3 class="font-bold text-gray-800 mb-1">Fundamentos</h3>
                                            <p class="text-gray-600 text-sm">Conceptos básicos y teoría</p>
                                        </div>
                                        <div class="text-center p-4">
                                            <div class="inline-flex items-center justify-center w-12 h-12 bg-primary/10 rounded-full mb-3">
                                                <i class="fas fa-palette text-primary"></i>
                                            </div>
                                            <h3 class="font-bold text-gray-800 mb-1">Diseño</h3>
                                            <p class="text-gray-600 text-sm">UI/UX y desarrollo visual</p>
                                        </div>
                                        <div class="text-center p-4">
                                            <div class="inline-flex items-center justify-center w-12 h-12 bg-primary/10 rounded-full mb-3">
                                                <i class="fas fa-laptop-code text-primary"></i>
                                            </div>
                                            <h3 class="font-bold text-gray-800 mb-1">Práctica</h3>
                                            <p class="text-gray-600 text-sm">Saber hacer aplicado</p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            
                            function mostrar_fundamentos($subtema = '') {
                                ?>
                                <h2 class="text-2xl font-bold text-primary mb-6">Fundamentos de Frontend</h2>
                                
                                <?php if (!$subtema || $subtema == 'concepto'): ?>
                                <div id="concepto" class="mb-8">
                                    <h3 class="text-xl font-bold text-secondary mb-4 flex items-center">
                                        <span class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">a</span>
                                        Concepto de frameworks de Frontend web
                                    </h3>
                                    <div class="bg-gray-50 rounded-xl p-6 mb-4">
                                        <p class="text-gray-700 mb-4">
                                            Un <strong>framework de frontend</strong> es un conjunto de herramientas, librerías y convenciones que proporcionan una estructura base para desarrollar interfaces de usuario web. Estos frameworks permiten construir aplicaciones web complejas de manera más eficiente, organizada y mantenible.
                                        </p>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                            <div class="p-4 bg-white rounded-lg border border-gray-200">
                                                <h4 class="font-bold text-primary mb-2">Características principales:</h4>
                                                <ul class="text-gray-600 space-y-1">
                                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Componentes reutilizables</li>
                                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Gestión de estado de la aplicación</li>
                                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Enrutamiento y navegación</li>
                                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Comunicación con APIs</li>
                                                </ul>
                                            </div>
                                            <div class="p-4 bg-white rounded-lg border border-gray-200">
                                                <h4 class="font-bold text-primary mb-2">Beneficios:</h4>
                                                <ul class="text-gray-600 space-y-1">
                                                    <li><i class="fas fa-rocket text-blue-500 mr-2"></i>Desarrollo más rápido</li>
                                                    <li><i class="fas fa-shield-alt text-blue-500 mr-2"></i>Mayor seguridad</li>
                                                    <li><i class="fas fa-users text-blue-500 mr-2"></i>Trabajo en equipo facilitado</li>
                                                    <li><i class="fas fa-mobile-alt text-blue-500 mr-2"></i>Responsive design integrado</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if (!$subtema || $subtema == 'tipos'): ?>
                                <div id="tipos" class="mb-8">
                                    <h3 class="text-xl font-bold text-secondary mb-4 flex items-center">
                                        <span class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">b</span>
                                        Tipos de frameworks de Frontend existentes
                                    </h3>
                                    <div class="overflow-x-auto">
                                        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                                            <thead class="bg-primary text-white">
                                                <tr>
                                                    <th class="py-3 px-4 text-left">Framework</th>
                                                    <th class="py-3 px-4 text-left">Lenguaje</th>
                                                    <th class="py-3 px-4 text-left">Características</th>
                                                    <th class="py-3 px-4 text-left">Popularidad</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                                    <td class="py-3 px-4 font-semibold">React</td>
                                                    <td class="py-3 px-4">JavaScript</td>
                                                    <td class="py-3 px-4">Componentes, Virtual DOM, JSX</td>
                                                    <td class="py-3 px-4">
                                                        <div class="flex items-center">
                                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                                <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
                                                            </div>
                                                            <span class="ml-2 text-sm">85%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                                    <td class="py-3 px-4 font-semibold">Vue.js</td>
                                                    <td class="py-3 px-4">JavaScript</td>
                                                    <td class="py-3 px-4">Progresivo, Template-based, Two-way binding</td>
                                                    <td class="py-3 px-4">
                                                        <div class="flex items-center">
                                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                                <div class="bg-blue-500 h-2 rounded-full" style="width: 70%"></div>
                                                            </div>
                                                            <span class="ml-2 text-sm">70%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                                    <td class="py-3 px-4 font-semibold">Angular</td>
                                                    <td class="py-3 px-4">TypeScript</td>
                                                    <td class="py-3 px-4">Completo, MVC, Two-way binding</td>
                                                    <td class="py-3 px-4">
                                                        <div class="flex items-center">
                                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                                <div class="bg-red-500 h-2 rounded-full" style="width: 60%"></div>
                                                            </div>
                                                            <span class="ml-2 text-sm">60%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                                    <td class="py-3 px-4 font-semibold">Svelte</td>
                                                    <td class="py-3 px-4">JavaScript</td>
                                                    <td class="py-3 px-4">Compilado, Sin Virtual DOM, Reactivo</td>
                                                    <td class="py-3 px-4">
                                                        <div class="flex items-center">
                                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                                <div class="bg-orange-500 h-2 rounded-full" style="width: 40%"></div>
                                                            </div>
                                                            <span class="ml-2 text-sm">40%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="p-4 bg-blue-50 rounded-lg">
                                            <h4 class="font-bold text-blue-800 mb-2">Frameworks basados en componentes</h4>
                                            <p class="text-blue-700 text-sm">React, Vue, Angular - Se centran en componentes reutilizables</p>
                                        </div>
                                        <div class="p-4 bg-green-50 rounded-lg">
                                            <h4 class="font-bold text-green-800 mb-2">Frameworks progresivos</h4>
                                            <p class="text-green-700 text-sm">Vue.js - Pueden adoptarse gradualmente</p>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if (!$subtema || $subtema == 'herramientas'): ?>
                                <div id="herramientas" class="mb-8">
                                    <h3 class="text-xl font-bold text-secondary mb-4 flex items-center">
                                        <span class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">c</span>
                                        Herramientas para el framework seleccionado (Tailwind CSS)
                                    </h3>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                        <div class="card p-6 hover:shadow-lg transition">
                                            <div class="flex items-center mb-4">
                                                <div class="bg-primary/10 p-3 rounded-lg mr-4">
                                                    <i class="fab fa-node-js text-primary text-2xl"></i>
                                                </div>
                                                <div>
                                                    <h4 class="font-bold text-gray-800">Node.js & npm</h4>
                                                    <p class="text-gray-600 text-sm">Gestión de dependencias</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700">Entorno de ejecución y gestor de paquetes para instalar Tailwind CSS</p>
                                            <code class="block mt-3 bg-gray-100 p-2 rounded text-sm">npm install tailwindcss</code>
                                        </div>
                                        
                                        <div class="card p-6 hover:shadow-lg transition">
                                            <div class="flex items-center mb-4">
                                                <div class="bg-primary/10 p-3 rounded-lg mr-4">
                                                    <i class="fas fa-terminal text-primary text-2xl"></i>
                                                </div>
                                                <div>
                                                    <h4 class="font-bold text-gray-800">PostCSS</h4>
                                                    <p class="text-gray-600 text-sm">Procesador CSS</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700">Transforma CSS con JavaScript plugins. Tailwind lo usa internamente</p>
                                            <code class="block mt-3 bg-gray-100 p-2 rounded text-sm">postcss.config.js</code>
                                        </div>
                                        
                                        <div class="card p-6 hover:shadow-lg transition">
                                            <div class="flex items-center mb-4">
                                                <div class="bg-primary/10 p-3 rounded-lg mr-4">
                                                    <i class="fas fa-cogs text-primary text-2xl"></i>
                                                </div>
                                                <div>
                                                    <h4 class="font-bold text-gray-800">Vite / Webpack</h4>
                                                    <p class="text-gray-600 text-sm">Bundlers</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700">Empaquetadores de módulos para desarrollo y producción</p>
                                            <code class="block mt-3 bg-gray-100 p-2 rounded text-sm">npm run build</code>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-6 bg-gradient-to-r from-primary/10 to-secondary/10 p-6 rounded-xl">
                                        <h4 class="font-bold text-primary mb-3">Flujo de trabajo con Tailwind:</h4>
                                        <ol class="space-y-2 text-gray-700">
                                            <li class="flex items-start">
                                                <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-xs mr-3 mt-1">1</span>
                                                <span>Instalación vía npm o CDN</span>
                                            </li>
                                            <li class="flex items-start">
                                                <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-xs mr-3 mt-1">2</span>
                                                <span>Configuración del archivo tailwind.config.js</span>
                                            </li>
                                            <li class="flex items-start">
                                                <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-xs mr-3 mt-1">3</span>
                                                <span>Importación en CSS principal</span>
                                            </li>
                                            <li class="flex items-start">
                                                <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-xs mr-3 mt-1">4</span>
                                                <span>Uso de clases utilitarias en HTML</span>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if (!$subtema || $subtema == 'instalacion'): ?>
                                <div id="instalacion" class="mb-8">
                                    <h3 class="text-xl font-bold text-secondary mb-4 flex items-center">
                                        <span class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">d</span>
                                        Proceso de instalación y configuración de Tailwind CSS
                                    </h3>
                                    
                                    <div class="bg-gray-800 text-gray-100 rounded-xl p-6 mb-6 overflow-x-auto">
                                        <h4 class="text-lg font-bold text-white mb-4">Guía de instalación paso a paso:</h4>
                                        <pre><code class="language-bash">
# 1. Inicializar proyecto (si no existe)
npm init -y

# 2. Instalar Tailwind CSS
npm install -D tailwindcss postcss autoprefixer

# 3. Inicializar configuración
npx tailwindcss init -p

# 4. Configurar archivo tailwind.config.js
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [],
}

# 5. Importar en CSS principal (styles.css)
@tailwind base;
@tailwind components;
@tailwind utilities;

# 6. Ejecutar en modo desarrollo
npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch

# 7. Compilar para producción
npx tailwindcss -i ./src/input.css -o ./dist/output.css --minify
                                        </code></pre>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="border border-gray-200 rounded-xl p-6">
                                            <h4 class="font-bold text-primary mb-3">Configuración del archivo tailwind.config.js:</h4>
                                            <div class="bg-gray-50 p-4 rounded-lg">
                                                <code class="text-sm">
module.exports = {
  content: [
    "./**/*.php",
    "./**/*.html",
    "./**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#6B3F69',
        secondary: '#8D5F8C',
        accent: '#A376A2',
        light: '#DDC3C3',
        dark: '#4A2D49',
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
                                                </code>
                                            </div>
                                        </div>
                                        
                                        <div class="border border-gray-200 rounded-xl p-6">
                                            <h4 class="font-bold text-primary mb-3">Ejemplo de uso en HTML:</h4>
                                            <div class="bg-gray-50 p-4 rounded-lg">
                                                <code class="text-sm">
&lt;!-- Botón con estilos de Tailwind --&gt;
&lt;button class="bg-primary hover:bg-secondary text-white 
               font-bold py-2 px-4 rounded-lg 
               transition duration-300"&gt;
  Click me
&lt;/button&gt;

&lt;!-- Tarjeta responsiva --&gt;
&lt;div class="max-w-sm rounded-lg overflow-hidden 
            shadow-lg bg-white"&gt;
  &lt;div class="px-6 py-4"&gt;
    &lt;h2 class="font-bold text-xl mb-2"&gt;Título&lt;/h2&gt;
    &lt;p class="text-gray-700"&gt;Contenido...&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-6 p-6 bg-blue-50 rounded-xl">
                                        <div class="flex items-start">
                                            <i class="fas fa-lightbulb text-blue-500 text-2xl mt-1 mr-4"></i>
                                            <div>
                                                <h4 class="font-bold text-blue-800 mb-2">Buenas prácticas de instalación:</h4>
                                                <ul class="text-blue-700 space-y-1">
                                                    <li><i class="fas fa-check mr-2"></i>Usar siempre la versión estable más reciente</li>
                                                    <li><i class="fas fa-check mr-2"></i>Configurar PurgeCSS para eliminar CSS no utilizado en producción</li>
                                                    <li><i class="fas fa-check mr-2"></i>Utilizar CDN solo para prototipos rápidos, no para producción</li>
                                                    <li><i class="fas fa-check mr-2"></i>Mantener todas las dependencias actualizadas</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <!-- Navegación entre subtemas -->
                                <?php if ($subtema): ?>
                                <div class="flex justify-between mt-8 pt-6 border-t border-gray-200">
                                    <?php
                                    $subtemas_fundamentos = ['concepto', 'tipos', 'herramientas', 'instalacion'];
                                    $current_index = array_search($subtema, $subtemas_fundamentos);
                                    $prev_subtema = ($current_index > 0) ? $subtemas_fundamentos[$current_index - 1] : null;
                                    $next_subtema = ($current_index < count($subtemas_fundamentos) - 1) ? $subtemas_fundamentos[$current_index + 1] : null;
                                    ?>
                                    
                                    <?php if ($prev_subtema): ?>
                                    <a href="?tema=fundamentos&subtema=<?php echo $prev_subtema; ?>" 
                                       class="flex items-center text-primary hover:text-secondary">
                                        <i class="fas fa-arrow-left mr-2"></i> Anterior
                                    </a>
                                    <?php else: ?>
                                    <span></span>
                                    <?php endif; ?>
                                    
                                    <?php if ($next_subtema): ?>
                                    <a href="?tema=fundamentos&subtema=<?php echo $next_subtema; ?>" 
                                       class="flex items-center text-primary hover:text-secondary">
                                        Siguiente <i class="fas fa-arrow-right ml-2"></i>
                                    </a>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                                <?php
                            }
                            
                            function mostrar_diseno($subtema = '') {
                                ?>
                                <h2 class="text-2xl font-bold text-primary mb-6">Diseño Frontend</h2>
                                
                                <?php if (!$subtema || $subtema == 'elementos'): ?>
                                <div id="elementos" class="mb-8">
                                    <h3 class="text-xl font-bold text-secondary mb-4 flex items-center">
                                        <span class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">a</span>
                                        Elementos que integran el framework de frontend
                                    </h3>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                                        <div class="bg-gradient-to-br from-primary/10 to-secondary/10 p-6 rounded-xl">
                                            <div class="inline-flex items-center justify-center w-12 h-12 bg-primary/20 rounded-full mb-4">
                                                <i class="fas fa-cube text-primary"></i>
                                            </div>
                                            <h4 class="font-bold text-gray-800 mb-2">Componentes</h4>
                                            <p class="text-gray-600 text-sm">Elementos UI reutilizables como botones, formularios, cards</p>
                                        </div>
                                        
                                        <div class="bg-gradient-to-br from-primary/10 to-secondary/10 p-6 rounded-xl">
                                            <div class="inline-flex items-center justify-center w-12 h-12 bg-primary/20 rounded-full mb-4">
                                                <i class="fas fa-exchange-alt text-primary"></i>
                                            </div>
                                            <h4 class="font-bold text-gray-800 mb-2">Directivas</h4>
                                            <p class="text-gray-600 text-sm">Atributos especiales que extienden HTML (v-if, v-for, :bind)</p>
                                        </div>
                                        
                                        <div class="bg-gradient-to-br from-primary/10 to-secondary/10 p-6 rounded-xl">
                                            <div class="inline-flex items-center justify-center w-12 h-12 bg-primary/20 rounded-full mb-4">
                                                <i class="fas fa-database text-primary"></i>
                                            </div>
                                            <h4 class="font-bold text-gray-800 mb-2">Estado (State)</h4>
                                            <p class="text-gray-600 text-sm">Gestión de datos reactivos y persistencia de la aplicación</p>
                                        </div>
                                    </div>
                                    
                                    <div class="bg-gray-50 rounded-xl p-6">
                                        <h4 class="font-bold text-primary mb-3">Arquitectura de componentes en Tailwind CSS:</h4>
                                        <div class="overflow-x-auto">
                                            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                                                <thead class="bg-gray-100">
                                                    <tr>
                                                        <th class="py-2 px-4 text-left">Elemento</th>
                                                        <th class="py-2 px-4 text-left">Función</th>
                                                        <th class="py-2 px-4 text-left">Ejemplo Tailwind</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-b">
                                                        <td class="py-3 px-4">Utilidades</td>
                                                        <td class="py-3 px-4">Clases atómicas para estilos</td>
                                                        <td class="py-3 px-4"><code class="bg-gray-100 px-2 py-1 rounded">bg-blue-500 text-white</code></td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="py-3 px-4">Componentes</td>
                                                        <td class="py-3 px-4">Elementos UI complejos</td>
                                                        <td class="py-3 px-4"><code class="bg-gray-100 px-2 py-1 rounded">@apply btn btn-primary</code></td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="py-3 px-4">Layout</td>
                                                        <td class="py-3 px-4">Estructura de página</td>
                                                        <td class="py-3 px-4"><code class="bg-gray-100 px-2 py-1 rounded">grid grid-cols-3 gap-4</code></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if (!$subtema || $subtema == 'mvvm'): ?>
                                <div id="mvvm" class="mb-8">
                                    <h3 class="text-xl font-bold text-secondary mb-4 flex items-center">
                                        <span class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">b</span>
                                        Modelo MVVM, instancias, interpolaciones, directivas, filtros, propiedades, funciones
                                    </h3>
                                    
                                    <div class="mb-6">
                                        <h4 class="font-bold text-gray-800 mb-3">Modelo MVVM (Model-View-ViewModel):</h4>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                                            <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                                                <h5 class="font-bold text-blue-800 mb-2">Model</h5>
                                                <p class="text-blue-700 text-sm">Representa los datos y la lógica de negocio</p>
                                            </div>
                                            <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                                                <h5 class="font-bold text-green-800 mb-2">View</h5>
                                                <p class="text-green-700 text-sm">Interfaz de usuario (HTML/CSS)</p>
                                            </div>
                                            <div class="bg-purple-50 p-4 rounded-lg border border-purple-200">
                                                <h5 class="font-bold text-purple-800 mb-2">ViewModel</h5>
                                                <p class="text-purple-700 text-sm">Conecta Model y View, maneja lógica de presentación</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                        <div class="border border-gray-200 rounded-xl p-6">
                                            <h4 class="font-bold text-primary mb-3">Elementos clave en Vue.js:</h4>
                                            <div class="space-y-4">
                                                <div>
                                                    <h5 class="font-semibold text-gray-700 mb-1">Instancias:</h5>
                                                    <p class="text-gray-600 text-sm">Cada aplicación Vue comienza con una instancia raíz</p>
                                                    <code class="block mt-2 bg-gray-100 p-2 rounded text-sm">new Vue({ el: '#app' })</code>
                                                </div>
                                                <div>
                                                    <h5 class="font-semibold text-gray-700 mb-1">Interpolaciones:</h5>
                                                    <p class="text-gray-600 text-sm">Mostrar datos en templates con {{ }}</p>
                                                    <code class="block mt-2 bg-gray-100 p-2 rounded text-sm">&lt;p&gt;{{ mensaje }}&lt;/p&gt;</code>
                                                </div>
                                                <div>
                                                    <h5 class="font-semibold text-gray-700 mb-1">Directivas:</h5>
                                                    <p class="text-gray-600 text-sm">Atributos especiales con v-</p>
                                                    <code class="block mt-2 bg-gray-100 p-2 rounded text-sm">&lt;div v-if="visible"&gt;&lt;/div&gt;</code>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="border border-gray-200 rounded-xl p-6">
                                            <h4 class="font-bold text-primary mb-3">Ejemplo práctico:</h4>
                                            <div class="bg-gray-800 text-gray-100 p-4 rounded-lg">
                                                <pre><code class="text-sm">
&lt;div id="app"&gt;
  &lt;!-- Interpolación --&gt;
  &lt;h1&gt;{{ titulo }}&lt;/h1&gt;
  
  &lt;!-- Directiva v-if --&gt;
  &lt;p v-if="mostrar"&gt;Este texto se muestra condicionalmente&lt;/p&gt;
  
  &lt;!-- Directiva v-for --&gt;
  &lt;ul&gt;
    &lt;li v-for="item in items" :key="item.id"&gt;
      {{ item.nombre }}
    &lt;/li&gt;
  &lt;/ul&gt;
  
  &lt;!-- Propiedades computadas --&gt;
  &lt;p&gt;Total: {{ totalItems }}&lt;/p&gt;
&lt;/div&gt;

&lt;script&gt;
new Vue({
  el: '#app',
  data: {
    titulo: 'Mi Aplicación',
    mostrar: true,
    items: [
      { id: 1, nombre: 'Item 1' },
      { id: 2, nombre: 'Item 2' }
    ]
  },
  computed: {
    totalItems() {
      return this.items.length;
    }
  }
});
&lt;/script&gt;
                                                </code></pre>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="bg-gradient-to-r from-primary/10 to-secondary/10 p-6 rounded-xl">
                                        <h4 class="font-bold text-primary mb-3">Ventajas del patrón MVVM:</h4>
                                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 text-gray-700">
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                                <span>Separación clara entre lógica y presentación</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                                <span>Fácil testing de componentes individuales</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                                <span>Reutilización de componentes ViewModel</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                                <span>Mantenimiento más sencillo del código</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <!-- Continuar con los otros subtemas de diseño... -->
                                <?php if (!$subtema || $subtema == 'apis'): ?>
                                <div id="apis" class="mb-8">
                                    <h3 class="text-xl font-bold text-secondary mb-4 flex items-center">
                                        <span class="bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">c</span>
                                        Conceptos de localStorage, APIs y su consumo
                                    </h3>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                        <div class="bg-blue-50 rounded-xl p-6">
                                            <h4 class="font-bold text-blue-800 mb-3">localStorage vs sessionStorage:</h4>
                                            <div class="overflow-x-auto">
                                                <table class="min-w-full bg-white border border-blue-200 rounded-lg">
                                                    <thead class="bg-blue-100">
                                                        <tr>
                                                            <th class="py-2 px-4 text-left">Característica</th>
                                                            <th class="py-2 px-4 text-left">localStorage</th>
                                                            <th class="py-2 px-4 text-left">sessionStorage</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-b">
                                                            <td class="py-3 px-4">Duración</td>
                                                            <td class="py-3 px-4">Persistente</td>
                                                            <td class="py-3 px-4">Por sesión</td>
                                                        </tr>
                                                        <tr class="border-b">
                                                            <td class="py-3 px-4">Alcance</td>
                                                            <td class="py-3 px-4">Mismo origen</td>
                                                            <td class="py-3 px-4">Misma pestaña</td>
                                                        </tr>
                                                        <tr class="border-b">
                                                            <td class="py-3 px-4">Límite</td>
                                                            <td class="py-3 px-4">5-10MB</td>
                                                            <td class="py-3 px-4">5-10MB</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="mt-4">
                                                <h5 class="font-semibold text-gray-700 mb-2">Uso en JavaScript:</h5>
                                                <div class="bg-gray-800 text-gray-100 p-3 rounded">
                                                    <code class="text-sm">
// Guardar datos
localStorage.setItem('usuario', JSON.stringify(usuario));

// Recuperar datos
const usuario = JSON.parse(localStorage.getItem('usuario'));

// Eliminar datos
localStorage.removeItem('usuario');

// Limpiar todo
localStorage.clear();
                                                    </code>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="bg-green-50 rounded-xl p-6">
                                            <h4 class="font-bold text-green-800 mb-3">Consumo de APIs REST:</h4>
                                            <p class="text-green-700 mb-4">Las APIs permiten comunicación entre frontend y backend</p>
                                            
                                            <div class="space-y-3">
                                                <div>
                                                    <h5 class="font-semibold text-gray-700 mb-1">Métodos HTTP comunes:</h5>
                                                    <div class="flex flex-wrap gap-2">
                                                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">GET - Obtener datos</span>
                                                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">POST - Crear datos</span>
                                                        <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">PUT - Actualizar datos</span>
                                                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">DELETE - Eliminar datos</span>
                                                    </div>
                                                </div>
                                                
                                                <div>
                                                    <h5 class="font-semibold text-gray-700 mb-1">Ejemplo con Fetch API:</h5>
                                                    <div class="bg-gray-800 text-gray-100 p-3 rounded">
                                                        <code class="text-sm">
// GET request
fetch('https://api.ejemplo.com/usuarios')
  .then(response => response.json())
  .then(data => console.log(data))
  .catch(error => console.error('Error:', error));

// POST request
fetch('https://api.ejemplo.com/usuarios', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({
    nombre: 'Juan',
    email: 'juan@ejemplo.com'
  })
});
                                                        </code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="bg-gradient-to-r from-primary/10 to-secondary/10 p-6 rounded-xl">
                                        <h4 class="font-bold text-primary mb-3">Buenas prácticas:</h4>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <h5 class="font-semibold text-gray-700 mb-2">Para localStorage:</h5>
                                                <ul class="text-gray-600 text-sm space-y-1">
                                                    <li><i class="fas fa-check text-green-500 mr-2"></i>No almacenar datos sensibles</li>
                                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Validar datos antes de guardar</li>
                                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Manejar cuotas de almacenamiento</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h5 class="font-semibold text-gray-700 mb-2">Para APIs:</h5>
                                                <ul class="text-gray-600 text-sm space-y-1">
                                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Manejar errores adecuadamente</li>
                                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Implementar loading states</li>
                                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Usar HTTPS en producción</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <!-- Continuar con los demás subtemas... -->
                                
                                <?php if ($subtema): ?>
                                <div class="flex justify-between mt-8 pt-6 border-t border-gray-200">
                                    <?php
                                    $subtemas_diseno = ['elementos', 'mvvm', 'apis', 'hospedaje', 'contenidos', 'ux', 'responsivo'];
                                    $current_index = array_search($subtema, $subtemas_diseno);
                                    $prev_subtema = ($current_index > 0) ? $subtemas_diseno[$current_index - 1] : null;
                                    $next_subtema = ($current_index < count($subtemas_diseno) - 1) ? $subtemas_diseno[$current_index + 1] : null;
                                    ?>
                                    
                                    <?php if ($prev_subtema): ?>
                                    <a href="?tema=diseno&subtema=<?php echo $prev_subtema; ?>" 
                                       class="flex items-center text-primary hover:text-secondary">
                                        <i class="fas fa-arrow-left mr-2"></i> Anterior
                                    </a>
                                    <?php else: ?>
                                    <span></span>
                                    <?php endif; ?>
                                    
                                    <?php if ($next_subtema): ?>
                                    <a href="?tema=diseno&subtema=<?php echo $next_subtema; ?>" 
                                       class="flex items-center text-primary hover:text-secondary">
                                        Siguiente <i class="fas fa-arrow-right ml-2"></i>
                                    </a>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                                <?php
                            }
                            
                            function mostrar_saber_hacer() {
                                ?>
                                <div class="text-center py-12">
                                    <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-r from-primary to-secondary rounded-full mb-6">
                                        <i class="fas fa-laptop-code text-white text-4xl"></i>
                                    </div>
                                    <h2 class="text-3xl font-bold text-primary mb-4">Saber Hacer</h2>
                                    <p class="text-gray-600 text-lg mb-8 max-w-2xl mx-auto">
                                        Prácticas y proyectos aplicados de la Unidad 1. Aquí encontrarás evidencias de aprendizaje y demostraciones de los conceptos estudiados.
                                    </p>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                                        <div class="card p-8 hover:shadow-xl transition">
                                            <div class="inline-flex items-center justify-center w-16 h-16 bg-primary/10 rounded-full mb-6">
                                                <i class="fas fa-code text-primary text-2xl"></i>
                                            </div>
                                            <h3 class="text-xl font-bold text-primary mb-4">Prácticas de Ejemplo</h3>
                                            <p class="text-gray-600 mb-6">
                                                Ejercicios prácticos que demuestran la aplicación de conceptos de frontend.
                                            </p>
                                            <div class="space-y-3">
                                                <div class="flex items-center text-gray-700">
                                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                                    <span>Diseño responsivo con Tailwind</span>
                                                </div>
                                                <div class="flex items-center text-gray-700">
                                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                                    <span>Componentes reutilizables</span>
                                                </div>
                                                <div class="flex items-center text-gray-700">
                                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                                    <span>Consumo de APIs REST</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="card p-8 hover:shadow-xl transition">
                                            <div class="inline-flex items-center justify-center w-16 h-16 bg-primary/10 rounded-full mb-6">
                                                <i class="fas fa-project-diagram text-primary text-2xl"></i>
                                            </div>
                                            <h3 class="text-xl font-bold text-primary mb-4">Proyecto Final</h3>
                                            <p class="text-gray-600 mb-6">
                                                Aplicación web completa que integra todos los conceptos de la unidad.
                                            </p>
                                            <div class="space-y-3">
                                                <div class="flex items-center text-gray-700">
                                                    <i class="fas fa-star text-yellow-500 mr-3"></i>
                                                    <span>Diseño completo UI/UX</span>
                                                </div>
                                                <div class="flex items-center text-gray-700">
                                                    <i class="fas fa-star text-yellow-500 mr-3"></i>
                                                    <span>Frontend con framework moderno</span>
                                                </div>
                                                <div class="flex items-center text-gray-700">
                                                    <i class="fas fa-star text-yellow-500 mr-3"></i>
                                                    <span>Implementación real</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-12 p-8 bg-gradient-to-r from-primary/10 to-secondary/10 rounded-2xl">
                                        <h3 class="text-xl font-bold text-primary mb-4">Evidencias de Aprendizaje</h3>
                                        <p class="text-gray-600 mb-6">
                                            Cada práctica y proyecto incluye documentación, código fuente y demostración en vivo.
                                        </p>
                                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                            <a href="#" class="btn btn-primary px-6">
                                                <i class="fas fa-eye mr-2"></i> Ver Demostración
                                            </a>
                                            <a href="#" class="btn bg-white border border-primary text-primary hover:bg-primary hover:text-white px-6">
                                                <i class="fas fa-download mr-2"></i> Descargar Código
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        
                        <!-- Botones de navegación general -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-between mt-12 pt-8 border-t border-gray-200">
                            <a href="../index.php" class="btn btn-primary inline-flex items-center justify-center">
                                <i class="fas fa-home mr-2"></i> Volver al Inicio
                            </a>
                            <div class="flex gap-4">
                                <a href="unidad2.php" class="btn btn-primary inline-flex items-center justify-center">
                                    Siguiente: Unidad 2 <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Estilos específicos para la navegación de temas */
.tema-nav-item {
    transition: all 0.3s ease;
}

.tema-nav-item:hover {
    transform: translateX(5px);
}

.subtema-item {
    position: relative;
}

.subtema-item::before {
    content: '';
    position: absolute;
    left: -1rem;
    top: 0;
    bottom: 0;
    width: 2px;
    background: var(--color-primary);
    opacity: 0.3;
}

/* Scroll suave para anclas */
html {
    scroll-behavior: smooth;
}

/* Estilos para tablas */
table th {
    font-weight: 600;
}

table td, table th {
    padding: 0.75rem 1rem;
}

/* Estilos para código */
code {
    font-family: 'Courier New', monospace;
    font-size: 0.9em;
}

pre code {
    display: block;
    overflow-x: auto;
    padding: 1rem;
    line-height: 1.5;
}
</style>

<script>
// Funcionalidad para la navegación
document.addEventListener('DOMContentLoaded', function() {
    // Resaltar el subtema actual en el contenido
    const subtema = '<?php echo $subtema_seleccionado; ?>';
    if (subtema) {
        const elemento = document.getElementById(subtema);
        if (elemento) {
            elemento.scrollIntoView({ behavior: 'smooth', block: 'start' });
            
            // Resaltar visualmente
            elemento.style.backgroundColor = 'rgba(107, 63, 105, 0.05)';
            elemento.style.borderLeft = '4px solid var(--color-primary)';
            elemento.style.paddingLeft = '1.5rem';
            elemento.style.marginLeft = '-1.5rem';
            elemento.style.borderRadius = '0 8px 8px 0';
        }
    }
    
    // Smooth scroll para enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId !== '#') {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
    
    // Animación para elementos al hacer scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);
    
    // Observar elementos para animación
    document.querySelectorAll('.card, table, .bg-gradient-to-r').forEach(el => {
        observer.observe(el);
    });
});

// Función para expandir/contraer subtemas
function toggleSubtema(temaId) {
    const subtemas = document.getElementById(`subtemas-${temaId}`);
    const icon = document.querySelector(`[data-tema="${temaId}"] i`);
    
    if (subtemas.classList.contains('hidden')) {
        subtemas.classList.remove('hidden');
        icon.classList.remove('fa-chevron-right');
        icon.classList.add('fa-chevron-down');
    } else {
        subtemas.classList.add('hidden');
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-right');
    }
}
</script>

<?php require_once '../includes/footer.php'; ?>