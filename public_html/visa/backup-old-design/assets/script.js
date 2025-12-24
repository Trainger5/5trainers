document.addEventListener('DOMContentLoaded', function () {
    // Hover lift reused
    const liftables = document.querySelectorAll('.auth-btn, .service-card, .gallery-item, .swipe-up');
    liftables.forEach(item => {
        item.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-4px) translateZ(0)';
        });
        item.addEventListener('mouseleave', function () {
            this.style.transform = 'translateY(0) translateZ(0)';
        });
    });

    // Scroll reveal animations
    const animated = document.querySelectorAll('[data-animate]');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });

    animated.forEach(el => observer.observe(el));
});