// Funcionalidades principales del portafolio

document.addEventListener('DOMContentLoaded', function() {
    // Detectar página activa y resaltar en navbar
    highlightActiveNavLink();
    
    // Inicializar animaciones
    initAnimations();
    
    // Manejar formularios
    initForms();
    
    // Inicializar tooltips
    initTooltips();
});

// Resaltar enlace activo en navbar
function highlightActiveNavLink() {
    const currentPage = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('nav a');
    
    navLinks.forEach(link => {
        const linkHref = link.getAttribute('href');
        if (linkHref === currentPage || 
            (currentPage === '' && linkHref === 'index.php') ||
            (currentPage === 'index.php' && linkHref === 'index.php')) {
            link.classList.add('nav-active');
        }
    });
}

// Inicializar animaciones
function initAnimations() {
    // Animar elementos al hacer scroll
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
    
    // Observar elementos con clase 'animate-on-scroll'
    document.querySelectorAll('.card, .section-title, .feature-item').forEach(el => {
        observer.observe(el);
    });
}

// Manejar formularios
function initForms() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            // Validación básica
            const requiredFields = this.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                } else {
                    field.classList.remove('border-red-500');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Por favor, complete todos los campos requeridos.');
            }
        });
    });
}

// Inicializar tooltips
function initTooltips() {
    const tooltipElements = document.querySelectorAll('[data-tooltip]');
    
    tooltipElements.forEach(el => {
        el.addEventListener('mouseenter', function() {
            const tooltipText = this.getAttribute('data-tooltip');
            const tooltip = document.createElement('div');
            tooltip.className = 'tooltip';
            tooltip.textContent = tooltipText;
            tooltip.style.position = 'absolute';
            tooltip.style.background = 'rgba(107, 63, 105, 0.9)';
            tooltip.style.color = 'white';
            tooltip.style.padding = '5px 10px';
            tooltip.style.borderRadius = '4px';
            tooltip.style.fontSize = '14px';
            tooltip.style.zIndex = '1000';
            
            const rect = this.getBoundingClientRect();
            tooltip.style.top = (rect.top - 35) + 'px';
            tooltip.style.left = (rect.left + rect.width/2 - tooltip.offsetWidth/2) + 'px';
            
            document.body.appendChild(tooltip);
            this.tooltipElement = tooltip;
        });
        
        el.addEventListener('mouseleave', function() {
            if (this.tooltipElement) {
                this.tooltipElement.remove();
                this.tooltipElement = null;
            }
        });
    });
}

// Función para mostrar/ocultar contenido
function toggleContent(elementId) {
    const element = document.getElementById(elementId);
    if (element) {
        element.classList.toggle('hidden');
    }
}

// Función para copiar al portapapeles
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        alert('Texto copiado al portapapeles: ' + text);
    }).catch(err => {
        console.error('Error al copiar: ', err);
    });
}