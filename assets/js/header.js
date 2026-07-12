/**
 * Hasooleilm LMS - Header JavaScript
 */
(function() {
    'use strict';
    
    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const primaryNav = document.getElementById('primary-navigation');
    
    if (menuToggle && primaryNav) {
        menuToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            this.setAttribute('aria-expanded', !isExpanded);
            primaryNav.classList.toggle('is-active');
            
            // Toggle submenu visibility for mobile
            const subMenus = primaryNav.querySelectorAll('.menu-item-has-children > a');
            subMenus.forEach(function(menuLink) {
                menuLink.addEventListener('click', function(e) {
                    if (window.innerWidth < 1024) {
                        e.preventDefault();
                        const parent = this.parentElement;
                        parent.classList.toggle('active');
                    }
                });
            });
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!primaryNav.contains(e.target) && !menuToggle.contains(e.target)) {
                primaryNav.classList.remove('is-active');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }
    
    // Add scrolled class to header on scroll
    const header = document.getElementById('masthead');
    let lastScroll = 0;
    
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        lastScroll = currentScroll;
    });
    
})();