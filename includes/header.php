<?php
// Verificar que init.php fue incluido
if (!defined('INIT_LOADED') && !defined('BASE_URL')) {
    // Si no está cargado, cargar init.php desde la ubicación correcta
    $init_path = dirname(__DIR__) . '/init.php';
    if (file_exists($init_path)) {
        require_once $init_path;
    } else {
        // Último intento: cargar config directamente
        require_once dirname(__DIR__) . '/config.php';
    }
}

// Determinar página actual
$pagina_actual = basename($_SERVER['PHP_SELF']);
$titulo_pagina = isset($page_title) ? $page_title : SITIO_NOMBRE;

// Función helper para rutas
function get_relative_path($path) {
    // Determinar la ruta base actual
    $current_dir = dirname($_SERVER['SCRIPT_NAME']);
    $root_dir = dirname($_SERVER['SCRIPT_NAME']);
    
    // Si estamos en una subcarpeta (unidades/)
    if (strpos($current_dir, 'unidades') !== false) {
        return '../' . ltrim($path, '/');
    }
    
    return $path;
}
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($titulo_pagina); ?></title>
    
    <!-- Metas SEO -->
    <meta name="description" content="<?php echo SITIO_DESCRIPCION; ?>">
    <meta name="author" content="<?php echo AUTOR; ?>">
    <meta name="keywords" content="framework, desarrollo web, portafolio, evidencia, <?php echo MATERIA; ?>">
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo url('assets/images/favicon.ico'); ?>" type="image/x-icon">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#6B3F69',
                        'secondary': '#8D5F8C',
                        'accent': '#A376A2',
                        'light': '#DDC3C3',
                        'dark': '#4A2D49',
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'system-ui', 'sans-serif'],
                        'inter': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Estilos propios -->
    <link rel="stylesheet" href="<?php echo url('assets/css/main.css'); ?>">
    
    <!-- Estilos inline para colores CSS variables -->
    <style>
        :root {
            --color-primary: #6B3F69;
            --color-secondary: #8D5F8C;
            --color-accent: #A376A2;
            --color-light: #DDC3C3;
            --color-dark: #4A2D49;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .content-wrapper {
            flex: 1;
        }
        
        /* Header fijo con transparencia */
        .site-header {
            backdrop-filter: blur(10px);
            background: rgba(107, 63, 105, 0.95);
            transition: all 0.3s ease;
        }
        
        .site-header.scrolled {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Navegación activa */
        .nav-active {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 8px;
        }
        
        /* Espacio para header fijo */
        .header-spacer {
            height: 80px;
        }
        
        @media (max-width: 768px) {
            .header-spacer {
                height: 70px;
            }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Header fijo -->
    <header class="site-header fixed top-0 left-0 right-0 text-white z-50 py-3">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Logo y nombre del sitio -->
                <div class="flex items-center space-x-3 mb-3 md:mb-0">
                    <div class="bg-light p-2 rounded-lg">
                        <i class="fas fa-code text-primary text-xl"></i>
                    </div>
                    <div>
                        <a href="<?php echo url('index.php'); ?>" class="text-xl font-bold hover:text-light transition">
                            <?php echo SITIO_NOMBRE; ?>
                        </a>
                        <p class="text-light text-xs"><?php echo MATERIA; ?></p>
                    </div>
                </div>
                
                <!-- Información de alumnos (solo desktop) -->
                <div class="hidden md:block text-center">
                    <p class="text-sm text-light"><?php echo ALUMNO1_NOMBRE; ?></p>
                    <p class="text-sm text-light"><?php echo ALUMNO2_NOMBRE; ?></p>
                </div>
                
                <!-- Navegación principal -->
                <nav class="w-full md:w-auto">
                    <ul class="flex flex-wrap justify-center md:justify-end space-x-2">
                        <?php
                        // Definir las rutas de navegación SIN CONTACTO
                        $nav_items = [
                            [
                                'url' => 'index.php',
                                'text' => 'Inicio',
                                'icon' => 'fa-home',
                                'active' => ($pagina_actual == 'index.php' || $pagina_actual == '')
                            ],
                            [
                                'url' => 'unidades/unidad1.php',
                                'text' => 'Unidad 1',
                                'icon' => 'fa-palette',
                                'active' => ($pagina_actual == 'unidad1.php')
                            ],
                            [
                                'url' => 'unidades/unidad2.php',
                                'text' => 'Unidad 2',
                                'icon' => 'fa-server',
                                'active' => ($pagina_actual == 'unidad2.php')
                            ],
                            [
                                'url' => 'unidades/unidad3.php',
                                'text' => 'Unidad 3',
                                'icon' => 'fa-shield-alt',
                                'active' => ($pagina_actual == 'unidad3.php')
                            ],
                            [
                                'url' => 'about.php',
                                'text' => 'Acerca',
                                'icon' => 'fa-info-circle',
                                'active' => ($pagina_actual == 'about.php')
                            ]
                        ];
                        
                        foreach ($nav_items as $item):
                            $full_url = url($item['url']);
                        ?>
                        <li>
                            <a href="<?php echo $full_url; ?>" 
                               class="px-3 py-2 hover:bg-white/10 rounded-lg transition flex items-center <?php echo $item['active'] ? 'nav-active font-semibold' : ''; ?>"
                               title="<?php echo $item['text']; ?>">
                                <i class="fas <?php echo $item['icon']; ?> mr-1"></i>
                                <span class="hidden md:inline"><?php echo $item['text']; ?></span>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Espacio para el header fijo -->
    <div class="header-spacer"></div>

    <!-- Contenedor principal -->
    <main class="content-wrapper">